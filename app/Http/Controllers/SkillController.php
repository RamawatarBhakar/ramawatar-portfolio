<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{


    function adminShow()
    {
        return view('Admin_Pages.skill', ['data' => Skill::all()]);
    }

    function edit($id)
    {
        return view('Forms.skillEdit', ['data' => Skill::findOrFail($id)]);
    }


    function update(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'proficiency' => 'nullable|numeric|min:1|max:100'
        ]);
        $save =    Skill::where('id', $req->id)->update([
            'name' => $req->name,
            'proficiency' => $req->proficiency
        ]);

        if ($save) {
            return redirect('/skill')->with('success', 'Skill Updated Successfully!');
        }
        return redirect('/skill')->with('success', 'Skill not Updated ! ' . $req->id);
    }
    function delete($id)
    {
        Skill::destroy($id);
        return redirect('/skill')->with('success', 'Skill deleted Successfully!');
    }


    function newSkill(Request $req)
    {
        $req->validate([
            'name' => 'required|string|max:255',
            'proficiency' => 'nullable|numeric|min:1|max:100'
        ]);

        $skill = new Skill();
        $skill->name = $req->name;
        $skill->proficiency = $req->proficiency;
        if ($skill->save()) {

            return redirect("/skill")->with('success', 'skills saved successfully!');
        }
        return 'not save';
    }
}
