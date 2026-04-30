<?php

namespace App\Http\Controllers;

use App\Models\Personal_info;
use Illuminate\Http\Request;

class PersionalinfoController extends Controller
{

    function show()
    {
        return view('Admin_Pages.info', ['data' => personal_info::all()]);
    }
    function edit($id)
    {
        return view('Forms.infoEdit', ['data' => personal_info::findOrFail($id)]);
    }

    function update(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'about_me' => 'required|string',
            'github_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'profile_image' => 'nullable|string|max:255'
        ]);

        function delete($id)
        {
            Personal_info::destroy($id);
            return redirect('/info')->with('success', 'info deleted Successfully!');
        }

        Personal_info::where('id', $req->id)->update([
            'name' => $req->name,
            'tagline' => $req->tagline,
            'email' => $req->email,
            'phone' => $req->phone,
            'location' => $req->location,
            'about_me' => $req->about_me,
            'github_url' => $req->github_url,
            'linkedin_url' => $req->linkedin_url,
            'profile_image' => $req->profile_image
        ]);

        return redirect('/info')->with('success', 'Personal Info Updated Successfully!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'tagline'      => 'required|string|max:255',
            'email'        => 'required|email|max:255',
            'phone'        => 'required|string|max:255',
            'location'     => 'nullable|string|max:255',
            'about_me'     => 'required|string',
            'github_url'   => 'nullable|url|max:255',
            'linkedin_url' => 'nullable|url|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $validated['profile_image'] = $request->file('profile_image')->store('profiles', 'public');
        }

        personal_info::create($validated);

        return redirect()->route('dashboard')->with('success', 'Personal info saved!');
    }
}
