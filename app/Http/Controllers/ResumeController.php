<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Personal_info;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function index()
    {

        //$info = Personal_info::first();

        $info = Personal_info::first();

        // return view('resume', compact('personalInfo'));
        return view('Pages.resume', [
            'personalInfos' => $info,

        ]);
    }
}
