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
            'assign_name' => 'assign_t 1',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assign_name' => 'Quiz',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assign_name' => 'Submission',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assign_name' => 'assignmentname',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assign_name' => 'C++ Programming',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assign_name' => 'Art and Design',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
            [
            'assign_name' => 'Art History',
            'created_at' => new \DateTime,
            'updated_at' => null,
            ],
        ];
        \DB::table('assignment')->insert($assign);
    }
}
