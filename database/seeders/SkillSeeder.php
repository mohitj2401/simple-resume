<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::truncate();
        $datas = [

            ['name' => 'Laravel', 'is_major' => 0, 'type' => 1, 'user_id' => 1,],
            ['name' => 'Javascript', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'HTML', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'CSS', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'PHP', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'GIT', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'Flutter', 'is_major' => 0, 'type' => 1, 'user_id' => 1],
            ['name' => 'Python', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'Spring Boot', 'is_major' => 0, 'type' => 1, 'user_id' => 1],
            ['name' => 'Java', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'Ajax', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'MySQL', 'is_major' => 0, 'type' => 0, 'user_id' => 1],
            ['name' => 'Angular', 'is_major' => 0, 'type' => 1, 'user_id' => 1],
            ['name' => 'Frontend', 'is_major' => 1, 'type' => 2, 'user_id' => 1],
            ['name' => 'Beckend', 'is_major' => 1, 'type' => 2, 'user_id' => 1],
            ['name' => 'Full-stack', 'is_major' => 1, 'type' => 2, 'user_id' => 1],

        ];
        Skill::insert($datas);
    }
}
