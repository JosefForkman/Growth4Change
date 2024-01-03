<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sponsor as ModelsSponsor;
use Livewire\Attributes\Computed;

class Sponsor extends Component
{

    #[Computed]
    public function sponsors()
    {
        return ModelsSponsor::all();
    }
    public function render()
    {
        return view('livewire.sponsor');
    }
}
