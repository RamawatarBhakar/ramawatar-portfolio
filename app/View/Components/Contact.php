<?php

namespace App\View\Components;

use App\Models\Personal_info;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Contact extends Component
{
    /**
     * Create a new component instance.
     */
    public $personalInfo;
    public function __construct()
    {
        $this->personalInfo = Personal_info::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact');
    }
}
