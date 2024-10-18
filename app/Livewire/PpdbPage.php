<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ppdb;
use App\Models\Ppdbdetail;

class PpdbPage extends Component
{
    public $ppdbs;
    public $ppdbdetails;

    public function mount()
    {
        $this->ppdbs = Ppdb::all(); // Fetch all records from the sejarahs table
        $this->ppdbdetails = Ppdbdetail::all();
    }

    public function render()
    {
        return view('livewire.ppdb-page');
    }
}
