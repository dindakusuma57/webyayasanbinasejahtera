<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sejarah;


class SejarahPage extends Component
{
    public $sejarahs;

    public function mount()
    {
        $this->sejarahs = Sejarah::all();
    }

    public function render()
    {
        return view('livewire.sejarah-page');
    }
}



