<?php

namespace App\WebMiners\Udemy;

use App\Models\Scraper\Udemy\UdemyCourse;
use App\Models\Scraper\Udemy\UdemyUrl;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class UdemyCourseDetailScraper
{
    private const CONTENT_FIELDS = 'badges,context_info,objectives_summary,instructional_level,archive_time,avg_rating,completion_ratio,description,created,description,favorite_time,headline,image_750x422,is_in_any_ufb_content_collection,is_paid,is_private,is_wishlisted,locale,num_lectures,num_quizzes,num_reviews,num_subscribers,primary_category,primary_subcategory,status_label,title,url,visible_instructors,content_info,caption_locales,caption_languages,published_title';

    private const COMPONENT_FIELDS = 'badges,incentives,instructor_links,lifetime_access_context,money_back_guarantee,recommendation,slider_menu,reviews_context,curriculum_context';

    public function getContent($slug, $field = null)
    {
        $field = ($field) ? $field : self::CONTENT_FIELDS;

        $response = Http::get('https://www.udemy.com/api-2.0/courses/'.$slug.'/?fields[course]='.$field);
        $response = json_decode($response->body());

        return $response;
    }

    public function getComponent($course_id, $field = null)
    {
        $field = ($field) ? $field : self::COMPONENT_FIELDS;
        $response = Http::get('https://www.udemy.com/api-2.0/course-landing-components/'.$course_id.'/me/?components='.$field);
        $response = json_decode($response->body());

        return $response;
    }

    public function getReviews($course_id, $page = 1, $page_size = 1000)
    {
        $response = Http::get('https://www.udemy.com/api-2.0/courses/'.$course_id.'/reviews/?page='.$page.'&page_size='.$page_size.'&is_text_review=1&ordering=course_review_score__rank&fields[course_review]=@default,response,content_html,created_formatted_with_time_since&fields[user]=@min,image_100x100,initials,public_display_name,tracking_id&fields[course_review_response]=@min,user,content_html,created_formatted_with_time_since');
        $response = json_decode($response->body());

        return $response;
    }

    public function getPrice($course_id)
    {
        $response = Http::get('https://www.udemy.com/api-2.0/pricing/?course_ids='.$course_id.'&fields[pricing_result]=price,discount_price,list_price,price_detail');
        $response = json_decode($response->body());

        return $response;
    }

    public function courseStore($slug)
    {
        $courseContent = $this->getContent($slug);

        $courseId = $courseContent->id;

        $courseComponent = $this->getComponent($courseId);

        $courseReviews = $this->getReviews($courseId);

        $coursePrice = $this->getPrice($courseId);

        $result = UdemyCourse::firstOrCreate(
            ['udemy_course_id' => $courseId],
            [
                'title' => $courseContent->title,
                'component' => $courseComponent,
                'content' => $courseContent,
                'reviews' => $courseReviews,
                'price' => $coursePrice->courses->$courseId,
            ]
        );

        return $result;
    }

    public function courseUpdate($slug)
    {
        $courseContent = $this->getContent($slug);

        $courseId = $courseContent->id;

        $courseComponent = $this->getComponent($courseId);

        $courseReviews = $this->getReviews($courseId);

        $coursePrice = $this->getPrice($courseId);

        $result = UdemyCourse::updateOrCreate(
            ['udemy_course_id' => $courseId],
            [
                'title' => $courseContent->title,
                'component' => $courseComponent,
                'content' => $courseContent,
                'reviews' => $courseReviews,
                'price' => $coursePrice->courses->$courseId,
            ]
        );

        return $result;
    }

    public function udemyCourseDetailStore(UdemyUrl $udemyUrl)
    {
        $slug = $udemyUrl->where('is_fetch', 'pending')->first();

        if (! $slug) {
            return 'No Course Url Found';
        }

        $slug->update([
            'is_fetch' => 'working',
        ]);

        $result = $this->courseStore(rtrim(Str::replace('https://www.udemy.com/course/', '', $slug->url), '/'));

        if (! $result) {
            return 'Something Wrong Please Check Manually';
        }

        $slug->update([
            'is_fetch' => 'done',
        ]);

        return 'Course id: '.$result->id.' Store in Database';
    }
}
