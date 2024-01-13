<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;

class Changemaker extends Component
{

    #[Computed]
    public function changemakers()
    {
        return [
            [
                'url' => 'https://picsum.photos/466/126?random=1"',
                'alt' => 'Changemaker 1'
            ],
            [
                'url' => 'https://picsum.photos/466/126?random=2"',
                'alt' => 'Changemaker 2'
            ],
            [
                'url' => 'https://picsum.photos/466/126?random=3"',
                'alt' => 'Changemaker 3'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.changemaker');
    }
}
