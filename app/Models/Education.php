<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = ['education_name', 'institute_name', 'description', 'is_present', 'start_date', 'end_date', 'percentage'];
}
