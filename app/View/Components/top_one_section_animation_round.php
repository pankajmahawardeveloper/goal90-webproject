<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class top_one_section_animation_round extends Component
{
    public $head;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($head, $title)
    {
        $this->head = $head;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top_one_section_animation_round');
    }
}
