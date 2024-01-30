<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'skill_ids', 'project_ids', 'experience_ids', 'education_ids', 'user_id', 'show_duration'];

    function projects()
    {
        return  Project::whereIn('id', json_decode($this->project_ids))->orderBy("end_date", "desc")->get();
    }

    function skills()
    {
        return  Skill::whereIn('id', json_decode($this->skill_ids));
    }

    function experiences()
    {
        return  Experience::whereIn('id', json_decode($this->experience_ids))->orderBy('start_date', 'desc')->get();
    }

    function educations()
    {
        return  Education::whereIn('id', json_decode($this->education_ids))->get();
    }
}
