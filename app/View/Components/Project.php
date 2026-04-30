<?php

namespace App\View\Components;

use App\Models\Project as ModelsProject;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    public $projects;
    public function __construct()
    {
        $this->projects = ModelsProject::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project');
    }
}
