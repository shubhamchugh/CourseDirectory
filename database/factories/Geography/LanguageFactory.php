<?php

namespace Database\Factories\Geography;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Geography\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true), // Generate a name of up to 2 words.
            'code' => $this->faker->languageCode, // Generate a language code.
            'type' => $this->faker->randomElement(['type1', 'type2', 'type3']), // Example types.
        ];
    }
}
