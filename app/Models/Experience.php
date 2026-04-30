<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Request;

class Experience extends Model
{
    protected $fillable = [
        'job_title',
        'company',
        'start_date',
        'end_date',
        'is_current',
        'description',
    ];
}
