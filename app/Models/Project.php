<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'type', 'description', 'skill_used', 'start_date', 'end_date', 'user_id', 'pointers', 'slug'];

    protected $appends = ['duration', 'slug_title'];


    function getDurationAttribute()
    {
        if (is_null($this->end_date))
            return Carbon::parse($this->start_date)->format('M Y') . ' - Present';
        return  Carbon::parse($this->start_date)->format('M Y') . ' - ' .  Carbon::parse($this->end_date)->format('M Y');
    }

    function getSlugTitleAttribute()
    {

        return  $this->title . ' (' . $this->slug . ') ';
    }
    function skills()
    {
        return  Skill::whereIn('id', json_decode($this->skill_used))->limit(5)->get();
    }

    function pointers_array()
    {
        if (is_null($this->pointers)) {
            return [];
        }
        return json_decode($this->pointers);
    }
}
