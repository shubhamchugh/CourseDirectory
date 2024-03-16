<?php

namespace Database\Seeders\Partner;

use App\Models\Partner\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create 10 platform records
        Platform::factory(10)->create();
    }
}
