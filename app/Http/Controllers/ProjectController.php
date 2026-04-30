<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    function show()
    {
        return view('Admin_Pages.project', ['data' => Project::all()]);
    }

    function edit($id)
    {
        return view('Forms.projectEdit', ['data' => Project::findOrFail($id)]);
    }

    function update(Request $req)
    {
        $req->validate([
            'title' => 'required|string|max:255',
            'tech_stack' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'nullable|string|max:255',
            'github_link' => 'nullable|string|max:255',
            'live_link' => 'nullable|string|max:255'
        ]);

        Project::where('id', $req->id)->update([
            'title' => $req->title,
            'tech_stack' => $req->tech_stack,
            'description' => $req->description,
            'image_path' => $req->image_path,
            'github_link' => $req->github_link,
            'live_link' => $req->live_link
        ]);

        return redirect('/project')->with('success', 'Project Updated Successfully!');
    }
    function project(Request $req)
    {
        $validated =  $req->validate(['title' => 'required', 'tech_stack' => 'required', 'description' => 'required']);

        $validated['image_path'] = $req->file('image_path')->store('projects', 'public');
        if (Project::create($validated)) {
            return redirect()->route('dashboard')->with('success', 'project save!');
        }

        return redirect()->route('dashboard')->with('success', 'project not save!');
    }
}
