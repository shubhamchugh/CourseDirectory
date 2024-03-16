<?php

namespace App\WebMiners\Udemy;

use App\Models\Scraper\Udemy\UdemySitemapUrl;
use App\Models\Scraper\Udemy\UdemyUrl;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class UdemySitemapScraper
{
    private const SITEMAP = 'https://www.udemy.com/sitemap.xml';

    private const INSTRUCTOR = 'https://www.udemy.com/sitemap/instructors.xml';

    private const COURSE = 'https://www.udemy.com/sitemap/courses.xml';

    public function getSitemap()
    {
        $beforeRequest = UdemySitemapUrl::count();

        $response = Http::puppScraper()->get('url?url='.self::SITEMAP);

        if (! $response->ok()) {
            return 'Something Bad with udemy sitemap Please check manually';
        }

        $xml = simplexml_load_string($response);
        $xml = json_decode(json_encode($xml), true);

        $xmlSitemap = $xml['body']['div'][0]['sitemapindex']['sitemap'];

        foreach ($xmlSitemap as $sitemap) {

            //filter and Store only course sitemap url udemy_sitemap table
            $course = Str::startsWith($sitemap['loc'], self::COURSE);

            if ($course) {
                UdemySitemapUrl::firstOrCreate(
                    ['sitemap_url' => $sitemap['loc']],
                    [
                        'type' => 'course_sitemap',
                        'sitemap_url' => $sitemap['loc'],
                    ]
                );
            }

            //filter and Store only instructor sitemap url udemy_sitemap table
            $instructor = Str::startsWith($sitemap['loc'], self::INSTRUCTOR);

            if ($instructor) {
                UdemySitemapUrl::firstOrCreate(
                    ['sitemap_url' => $sitemap['loc']],
                    [
                        'type' => 'instructor_sitemap',
                        'sitemap_url' => $sitemap['loc'],
                    ]
                );
            }
        }

        $afterRequest = UdemySitemapUrl::count();

        return 'Udemy sitemap updated in database till '.now().' Total Sitemap: '.$afterRequest.' Added New Sitemap '.($afterRequest - $beforeRequest);
    }

    public function getCourseUrl()
    {
        $beforeRequest = UdemySitemapUrl::count();
        $sitemap = UdemySitemapUrl::where('is_fetch', 'pending')
            ->where('type', 'course_sitemap')
            ->first();

        if (! $sitemap) {
            return "No sitemap found to get course urls (Please update sitemap with slug: 'udemy_sitemap_store')";
        }

        $sitemap->update([
            'is_fetch' => 'working',
        ]);

        $response = Http::puppScraper()->get('url?url='.$sitemap->sitemap_url);

        if (! $response->ok()) {
            return 'Something went wrong with sitemap update (Maybe block by Cloudflare)';
        }

        $xml = simplexml_load_string($response);
        $xml = json_decode(json_encode($xml), true);
        $xmlUrl = $xml['body']['div'][0]['urlset']['url'];

        foreach ($xmlUrl as $course_url) {
            UdemyUrl::firstOrCreate(
                ['url' => $course_url['loc']],
                [
                    'type' => 'course_url',
                    'url' => $course_url['loc'],
                ]
            );
        }

        $sitemap->update([
            'is_fetch' => 'done',
        ]);
        $afterRequest = UdemyUrl::count();

        return 'Udemy course Url updated from sitemap till '.now().' Total Course Urls: '.$afterRequest.' Added New Course urls: '.($afterRequest - $beforeRequest);
    }
}
