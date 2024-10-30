<?php

namespace App\Livewire;

use App\Models\Pesan;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use App\Models\Kontak;
use Livewire\Attributes\Title;

#[Title('Kontak - Yayasan Bina Sejahtera')]

class KontakPage extends Component
{

    public $kontaks;

    public function mount()
    {
        $this->kontaks = Kontak::all();
    }

    public function render()
    {
        return view('livewire.kontak-page');
    }
}
