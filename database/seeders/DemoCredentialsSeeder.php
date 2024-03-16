<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DemoCredentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->warn(PHP_EOL.'Creating demo admins...');

        User::factory()->withPassword('admin')->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        User::factory()->withPassword('student')->create([
            'name' => 'Student',
            'email' => 'student@student.com',
        ]);

        User::factory()->withPassword('instructor')->create([
            'name' => 'Instructor',
            'email' => 'instructor@instructor.com',
        ]);

        $this->command->info('Demo admins created.');
    }
}
