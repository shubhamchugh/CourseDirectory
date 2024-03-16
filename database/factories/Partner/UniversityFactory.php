<?php

namespace Database\Factories\Partner;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner\University>
 */
class UniversityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'iau' => $this->faker->bothify('??##??##'), // Random IAU code
            'iau_url' => $this->faker->url,
            'name' => $this->faker->company,
            'detail_name' => $this->faker->company.' University',
            'web_page' => $this->faker->domainName,
        ];
    }
}
