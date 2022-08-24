<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssignTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assign = [
            [
            'assignmentname' => 'Assignment 1',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assignmentname' => 'Quiz',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assignmentname' => 'Submission',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assignmentname' => 'assignmentname',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assignmentname' => 'C++ Programming',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assignmentname' => 'Art and Design',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assignmentname' => 'Art History',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
        ];
        \DB::table('assignment')->insert($assign);
    }
}
