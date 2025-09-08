<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '09179876543',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
