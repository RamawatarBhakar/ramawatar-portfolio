<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'tech_stack',
        'description',
        'image_path',
        'github_link',
        'live_link',
    ];
}
