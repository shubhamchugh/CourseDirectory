<?php

namespace Database\Seeders\Partner;

use App\Models\Partner\Institution;
use Illuminate\Database\Seeder;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create 10 institution records
        Institution::factory(10)->create();
    }
}
