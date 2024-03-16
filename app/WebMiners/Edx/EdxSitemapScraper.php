<?php

namespace App\WebMiners\Edx;

use App\Models\Scraper\Edx\EdxSitemapUrl;
use App\Models\Scraper\Edx\EdxUrl;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class EdxSitemapScraper
{
    private const SITEMAP = 'https://www.edx.org/sitemap-index.xml';

    private const COURSE_STRING = 'https://www.edx.org/course/';

    public function getSitemap()
    {
        $response = Http::get(self::SITEMAP);

        if ($response->status() != 200) {
            return false;
        }

        return $response;
    }

    public function getCourseUrl($sitemapUrl)
    {
        $response = Http::get($sitemapUrl);

        if ($response->status() != 200) {
            return false;
        }

        return $response;
    }

    public function storeSitemap()
    {
        $beforeRequest = EdxSitemapUrl::count();
        $response = $this->getSitemap()->body();

        if (! $response) {
            return 'Something Wrong Please Check Manually';
        }

        $xml = simplexml_load_string($response);
        $xml = json_decode(json_encode($xml), true);

        foreach ($xml['sitemap'] as $url) {
            EdxSitemapUrl::firstOrCreate([
                'type' => 'course_sitemap',
                'sitemap_url' => $url,
            ]);
        }

        $afterRequest = EdxSitemapUrl::count();

        return 'sitemap updated in database till. '.now().' Total Sitemap: '.$afterRequest.' Added New Sitemap '.($afterRequest - $beforeRequest);
    }

    public function storeCourseUrl()
    {
        $beforeRequest = EdxUrl::count();
        $response = EdxSitemapUrl::where([
            ['is_fetch', 'pending'],
            ['type', 'course_sitemap'],
        ])->first();

        if (! $response) {
            return false;
        }

        $sitemap = $this->getCourseUrl($response->sitemap_url);

        $xml = simplexml_load_string($sitemap);
        $xml = json_decode(json_encode($xml), true);

        foreach ($xml['url'] as $course) {

            $courseUrl = Str::startsWith($course['loc'], self::COURSE_STRING);

            if ($courseUrl) {
                EdxUrl::firstOrCreate([
                    'type' => 'course_url',
                    'url' => $course['loc'],
                ]);
            }
        }

        $afterRequest = EdxUrl::count();

        return 'Edx_Url updated in database till. '.now().' Total Edx_Url: '.$afterRequest.' Added New Edx_Url '.($afterRequest - $beforeRequest);
    }
}
