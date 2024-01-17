<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'type', 'description', 'skill_used', 'start_date', 'end_date'];

    protected $appends = ['duration'];


    function getDurationAttribute()
    {
        if (is_null($this->end_date))
            return Carbon::parse($this->start_date)->format('M Y') . ' - Present';
        return  Carbon::parse($this->start_date)->format('M Y') . ' - ' .  Carbon::parse($this->end_date)->format('M Y');
    }
}
