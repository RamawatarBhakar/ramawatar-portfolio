<?php

namespace App\View\Components;

use App\Models\Education as ModelsEducation;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Education extends Component
{
    public $education;
    public function __construct()
    {
        $this->education = ModelsEducation::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.education');
    }
}
