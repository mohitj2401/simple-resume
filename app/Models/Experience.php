<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['company_name', 'job_title', 'description', 'is_present', 'start_date', 'end_date', 'user_id'];
}
