<?php

namespace Database\Seeders\Geography;

use App\Models\Geography\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::factory(20)->create();
    }
}
