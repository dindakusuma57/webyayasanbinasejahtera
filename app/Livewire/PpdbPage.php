<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ppdb;
use App\Models\Ppdbdetail;
use Livewire\Attributes\Title;

#[Title('PPDB - Yayasan Bina Sejahtera')]
class PpdbPage extends Component
{
    public $ppdbs;
    public $ppdbdetails;

    public function mount()
    {
        $this->ppdbs = Ppdb::all();
        $this->ppdbdetails = Ppdbdetail::all();
    }

    public function render()
    {
        return view('livewire.ppdb-page');
    }
}
