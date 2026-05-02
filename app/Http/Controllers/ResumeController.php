<?php

namespace App\Http\Controllers;

use App\Models\Contact_Form;
use App\Models\Personal_info;
use Illuminate\Http\Request;


class ResumeController extends Controller
{

    public function index()
    {



        $info = Personal_info::first();


        return view('Pages.resume', [
            'personalInfos' => $info,

        ]);
    }

    function sendMessage(Request $req)
    {
        $valid = $req->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Contact_Form::create($valid);
        return redirect('/#contact')->with('success', 'Submited');
    }
}
