<?php

namespace App\WebMiners\Edx;

use App\Models\Scraper\Edx\EdxCourse;
use App\Models\Scraper\Edx\EdxUrl;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class EdxCourseDetailScraper
{
    private const COURSE_URL_PREFIX = 'https://www.edx.org/course/';

    public function updateEdxCourse()
    {
        $courseUrl = EdxUrl::where('is_fetch', 'pending')
            ->where('type', 'course_url')
            ->first();

        if (! $courseUrl) {
            return 'No url found in Sitemap to store new course';
        }

        $courseUrl->update([
            'is_fetch' => 'working',
        ]);

        $result = $this->courseStore($courseUrl->url);

        $courseUrl->update([
            'is_fetch' => 'done',
        ]);

        return $result;
    }

    public function getCourseDetail($slug)
    {
        $response = Http::get('https://www.edx.org/page-data/course/'.$slug.'/page-data.json');

        if ($response->status() != 200) {
            return false;
        }

        return json_decode($response->body());
    }

    public function courseStore($courseUrl)
    {
        $slug = trim(Str::replace(self::COURSE_URL_PREFIX, '', $courseUrl));

        $response = $this->getCourseDetail($slug);

        if (! $response) {
            return 'Something Wrong Please Check Manually';
        }

        $result = EdxCourse::firstOrCreate(
            ['edx_path' => $response->path],
            [
                'title' => $response->result->pageContext->title,
                'content' => $response->result,
            ]
        );

        return $result;
    }
}
