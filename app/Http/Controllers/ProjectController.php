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
            'image_path' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'github_link' => 'nullable|string|max:255',
            'live_link' => 'nullable|string|max:255'
        ]);

        $project = Project::find($req->id);


        if ($req->hasFile('image_path')) {
            $path = $req->file('image_path')->store('projects', 'public');
            $project->image_path = $path;
        }

        $project->title = $req->title;
        $project->tech_stack = $req->tech_stack;
        $project->description = $req->description;
        $project->github_link = $req->github_link;
        $project->live_link = $req->live_link;

        $project->save();

        return redirect('/project')->with('success', 'Project Updated Successfully!');
    }

    function delete($id)
    {
        Project::destroy($id);
        return redirect('/project')->with('success', 'info deleted Successfully!');
    }

    function project(Request $req)
    {
        $validated =  $req->validate(['title' => 'required', 'tech_stack' => 'required', 'description' => 'required']);

        $validated['image_path'] = $req->file('image_path')->store('projects', 'public');
        if (Project::create($validated)) {
            return redirect('/project')->with('success', 'project save!');
        }

        return redirect("/project")->with('success', 'project not save!');
    }
}
