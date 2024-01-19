<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['education_name', 'institute_name', 'description', 'is_present', 'start_date', 'end_date', 'percentage', 'user_id'];
    protected $appends = ['duration'];


    function getDurationAttribute()
    {
        if (is_null($this->end_date))
            return Carbon::parse($this->start_date)->format('M Y') . ' - Present';
        return  Carbon::parse($this->start_date)->format('M Y') . ' - ' .  Carbon::parse($this->end_date)->format('M Y');
    }
}
