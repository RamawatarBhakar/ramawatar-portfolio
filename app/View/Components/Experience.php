<?php

namespace App\View\Components;

use App\Models\Experience as ModelsExperience;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Experience extends Component
{
    public $experiences;
    public function __construct()
    {
        $this->experiences = ModelsExperience::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.experience');
    }
}
