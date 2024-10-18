<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sejarah; // Make sure to import your model


class SejarahPage extends Component
{
    public $sejarahs;

    public function mount()
    {
        $this->sejarahs = Sejarah::all(); // Fetch all records from the sejarahs table
    }

    public function render()
    {
        return view('livewire.sejarah-page');
    }
}



