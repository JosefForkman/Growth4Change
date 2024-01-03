<?php

namespace App\Livewire;

use Livewire\Component;

class Sponsor extends Component
{
    public int $Count = 0;

    public function add()
    {
        $this->Count = $this->Count += 1;
    }
    public function render()
    {
        return view('livewire.sponsor');
    }
}
