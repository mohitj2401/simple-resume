<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('positions')->truncate();
        DB::table('resumes')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $datas = [
            [
                'name' => "Full-Stack Developer",
                'active' => 1

            ],

            [
                'name' => "SDE",
                'active' => 0

            ],
            [
                'name' => "Software Developer",
                'active' => 0

            ],
        ];
        Position::insert($datas);
    }
}
