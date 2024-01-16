<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TextContiner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string      $title = 'Our Values',
        public array       $texts = [],
        public string|null $image = 'https://images.unsplash.com/photo-1481349518771-20055b2a7b24?q=80&w=2139&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        // public string | null $image = null,
        public string|null $alt = 'Our Values',
        public bool        $imageRight = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.text-continer');
    }
}
