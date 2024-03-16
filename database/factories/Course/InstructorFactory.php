<?php

namespace Database\Factories\Course;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name;

        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'bio' => $this->faker->optional()->paragraph,
            'email' => $this->faker->optional()->safeEmail,
            'x' => $this->faker->optional()->word,
            'facebook' => $this->faker->optional()->url,
            'linkedin' => $this->faker->optional()->url,
            'instagram' => $this->faker->optional()->url,
        ];
    }
}
