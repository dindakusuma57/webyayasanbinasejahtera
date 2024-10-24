<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sejarah;
use App\Models\Kepengurusan;


class SejarahPage extends Component
{
    public $sejarahs;
    public $kepengurusans;

    public function mount()
    {
        $this->sejarahs = Sejarah::all();
        $this->kepengurusans = Kepengurusan::all();
    }

    public function render()
    {
        return view('livewire.sejarah-page');
    }
}



