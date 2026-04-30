<?php

namespace App\View\Components;

use App\Models\Skill as ModelsSkill;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class Skill extends Component
{
    /**
     * Create a new component instance.
     */
    public $skills;
    public function __construct()
    {
        $this->skills = ModelsSkill::all();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.skill');
    }
}
