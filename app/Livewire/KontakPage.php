<?php

namespace App\Livewire;

use App\Models\Pesan;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Kontak - Yayasan Bina Sejahtera')]

class KontakPage extends Component
{

    public function render()
    {
        return view('livewire.kontak-page');
    }
}
