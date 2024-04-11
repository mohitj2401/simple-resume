<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['company_name', 'job_title', 'description', 'is_present', 'start_date', 'end_date', 'user_id'];
    protected $appends = ['duration', 'name_with_duration'];


    function getDurationAttribute()
    {
        if (is_null($this->end_date))
            return Carbon::parse($this->start_date)->format('M Y') . ' - Present';
        return  Carbon::parse($this->start_date)->format('M Y') . ' - ' .  Carbon::parse($this->end_date)->format('M Y');
    }

    function getNameWithDurationAttribute()
    {

        return  $this->company_name . ' ' . $this->duration;
    }
}
