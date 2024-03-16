<?php

namespace Database\Factories\Course;

use App\Enums\PublishStatusEnum;
use App\Models\Partner\Institution;
use App\Models\Partner\Platform;
use App\Models\Partner\University;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence;

        // Randomly decide whether published_at should be in the future or the past
        $future = rand(0, 1) === 1;
        $published_at = $future
            ? $this->faker->dateTimeBetween('now', '+1 year') // Future date
            : $this->faker->dateTimeBetween('-1 year', 'now'); // Past date

        // Determine status based on $published_at
        $status = Carbon::parse($published_at)->isFuture()
            ? PublishStatusEnum::SCHEDULED
            : PublishStatusEnum::cases()[array_rand(array_filter(
                PublishStatusEnum::cases(),
                fn ($case) => $case !== PublishStatusEnum::SCHEDULED // Exclude SCHEDULED from the random selection
            ))]->value;

        return [
            'user_id' => User::query()->inRandomOrder()->first()->id, // Assuming User model exists
            'university_id' => University::query()->inRandomOrder()->first()->id, // Assuming University model exists
            'institution_id' => Institution::query()->inRandomOrder()->first()->id, // Assuming Institution model exists
            'platform_id' => Platform::query()->inRandomOrder()->first()->id, // Assuming Platform model exists
            'slug' => Str::slug($title),
            'title' => $title,
            'views' => $this->faker->numberBetween(0, 10000),
            'description' => $this->faker->paragraph,
            'headline' => $this->faker->sentence,
            'is_featured' => $this->faker->boolean,
            'group' => $this->faker->randomElement(['course', 'degree']),
            'type' => $this->faker->randomElement(['on_demand', 'pre_recorded']),
            'format' => $this->faker->randomElement(['video', 'audio', 'live', 'text', 'interactive', 'offline', 'hybrid']),
            'level' => $this->faker->randomElement(['beginner', 'intermediate', 'advanced', 'professional', 'all_levels']),
            'is_paid' => $this->faker->boolean,
            'is_certificate' => $this->faker->boolean,
            'has_exercises' => $this->faker->boolean,
            'is_subtitles' => $this->faker->boolean,
            'expected_duration' => $this->faker->numberBetween(1, 100),
            'expected_duration_unit' => $this->faker->randomElement(['minutes', 'hours', 'days', 'weeks', 'months']),
            'num_lectures' => $this->faker->numberBetween(1, 50),
            'num_reviews' => $this->faker->numberBetween(1, 1000),
            'avg_rating' => $this->faker->numberBetween(1, 5),
            'num_subscribers' => $this->faker->numberBetween(1, 10000),
            'favorite_time' => $this->faker->numberBetween(1, 10000),
            'started_at' => $this->faker->dateTimeBetween('now', '+2 years')->format('Y-m-d H:i:s'),
            'finished_at' => $this->faker->dateTimeBetween('+2 years', '+4 years')->format('Y-m-d H:i:s'),
            'published_at' => $published_at,
            'status' => $status,
            'source' => $this->faker->url,
            'deleted_at' => $this->faker->optional(0.5, null)->dateTimeBetween,
        ];
    }
}
