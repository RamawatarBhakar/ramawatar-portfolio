<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tagline',
        'email',
        'phone',
        'location',
        'about_me',
        'github_url',
        'linkedin_url',
        'profile_image',
    ];
}
