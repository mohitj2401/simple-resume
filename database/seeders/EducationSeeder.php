<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::truncate();
        $datas = [
            [
                'education_name' => "B.Tech Computer Science",
                'institute_name' => 'Teerthanker Mahaveer University , Moradabad',
                'start_date' => '01-08-2017',

                'end_date' => '01-07-2021',

            ],

            [
                'education_name' => "XII",
                'institute_name' => 'Kids Corner Happy Sr. Sec. School',
                'start_date' => '01-04-2015',

                'end_date' => '01-03-2016',

            ],

            [
                'education_name' => "X",
                'institute_name' => 'Kids Corner Happy Sr. Sec. School',
                'start_date' => '01-04-2013',

                'end_date' => '01-03-2014',

            ],
        ];
        Education::insert($datas);
    }
}
