<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
            'coursename' => 'Mobile Journalism',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'coursename' => 'Director’s Craft',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'coursename' => 'Camera Tutorial : Basic Editing',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'coursename' => 'English',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
        ];
        \DB::table('course')->insert($courses); 
    }
}
