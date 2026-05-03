<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    function show()
    {
        return view('Admin_Pages.experience', ['data' => Experience::all()]);
    }

    function edit($id)
    {
        return view('Forms.experienceEdit', ['data' => Experience::findOrFail($id)]);
    }

    public function update(Request $req)
    {
        $req->validate([
            'job_title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'start_date' => 'required|string|max:255',
            'end_date' => 'nullable|string|max:255',
            'is_current' => 'nullable|boolean',
            'description' => 'required|string'
        ]);

        // checkbox handle
        $is_current = $req->has('is_current') ? 1 : 0;

        Experience::where('id', $req->id)->update([
            'job_title' => $req->job_title,
            'company' => $req->company,
            'start_date' => $req->start_date,
            'end_date' => $req->end_date,
            'is_current' => $is_current,
            'description' => $req->description
        ]);

        return redirect('/experience')->with('success', 'Experience Updated Successfully!');
    }
    function delete($id)
    {
        Experience::destroy($id);
        return redirect('/experience')->with('success', 'Skill deleted Successfully!');
    }

    function store(Request $req)
    {
        $validated = $req->validate([
            'job_title'   => 'required|string|max:255',
            'company'     => 'required|string|max:255',
            'start_date'  => 'required|string|max:255',
            'end_date'    => 'nullable|string|max:255',
            'is_current'  => 'required|boolean',
            'description' => 'required|string',
        ]);

        if (Experience::create($validated)) {
            return redirect('/experience')->with('success', 'Experience added successfully!');
        }
        return redirect('/experience')->with('success', 'Experience not added!');
    }
}
