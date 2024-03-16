<?php

namespace Database\Factories\Course;

use App\Models\Course\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course\CourseReview>
 */
class CourseReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::query()->inRandomOrder()->first()->id, // Assuming you have a Course model and its factory
            'user_id' => User::query()->inRandomOrder()->first()->id, // Assuming you have a User model and its factory
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'rating' => $this->faker->randomFloat(1, 1, 5), // Generates a random rating between 1.0 and 5.0
            'is_internal_review' => $this->faker->boolean,
            'approved_at' => $this->faker->boolean(80) ? $this->faker->dateTimeThisYear : null,
        ];
    }
}
