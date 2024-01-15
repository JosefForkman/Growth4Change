<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlipCardContainer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $cards = [
            [
                "image" => "https://picsum.photos/500/330?random=1",
                "title" => "Card 1",
                "shortDescription" => "Kenya's rapid urbanisation puts high demands on inclusive urban planning and sustainable food systems. Urban agriculture has the potential of addressing health and economic disparities by supplementing the local food supply and creating space for community development and sustainable livelihoods.",
                "extendedDescription" => "Growth4Change promotes innovative and climate smart technologies. Hydroponics is a form of farming that uses no soil, but instead grows plants in a solution of water and nutrients. It is ideal for crowded places, providing access to nutritious and safe food. Add a fishpond, and you have nutrient-rich aquaculture water for the plants.",
            ],
            [
                "image" => "https://picsum.photos/500/330?random=2",
                "title" => "Card 2",
                "shortDescription" => "Kenya's rapid urbanisation puts high demands on inclusive urban planning and sustainable food systems. Urban agriculture has the potential of addressing health and economic disparities by supplementing the local food supply and creating space for community development and sustainable livelihoods.",
                "extendedDescription" => "Growth4Change promotes innovative and climate smart technologies. Hydroponics is a form of farming that uses no soil, but instead grows plants in a solution of water and nutrients. It is ideal for crowded places, providing access to nutritious and safe food. Add a fishpond, and you have nutrient-rich aquaculture water for the plants.",
            ],
            [
                "image" => "https://picsum.photos/500/330?random=3",
                "title" => "Card 3",
                "shortDescription" => "Kenya's rapid urbanisation puts high demands on inclusive urban planning and sustainable food systems. Urban agriculture has the potential of addressing health and economic disparities by supplementing the local food supply and creating space for community development and sustainable livelihoods.",
                "extendedDescription" => "Growth4Change promotes innovative and climate smart technologies. Hydroponics is a form of farming that uses no soil, but instead grows plants in a solution of water and nutrients. It is ideal for crowded places, providing access to nutritious and safe food. Add a fishpond, and you have nutrient-rich aquaculture water for the plants.",
            ],
        ]
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.flip-card-container');
    }
}


