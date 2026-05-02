<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    function show()
    {
        return view('Admin_Pages.education', ['data' => Education::all()]);
    }
    function edit($id)
    {
        return view('Forms.educationEdit', ['data' => Education::findOrFail($id)]);
    }

    function update(Request $req)
    {
        $req->validate([
            'degree' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'start_year' => 'required|string|max:255',
            'end_year' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);

        Education::where('id', $req->id)->update([
            'degree' => $req->degree,
            'institution' => $req->institution,
            'start_year' => $req->start_year,
            'end_year' => $req->end_year,
            'description' => $req->description
        ]);

        return redirect('/education')->with('success', 'Education Updated Successfully!');
    }

    function delete($id)
    {
        Education::destroy($id);
        return redirect('/education')->with('success', 'Education Details deleted Successfully!');
    }


    function store(Request $request)
    {
        $validated = $request->validate([
            'degree'      => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'start_year'  => 'required|string|max:255',
            'end_year'    => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Education::create($validated);

        return redirect("/education")->with('success', 'Education added successfully!');
    }
}
