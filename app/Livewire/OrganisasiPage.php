<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Struktur;

class OrganisasiPage extends Component
{
    public $strukturs;

    public function mount()
    {
        $this->strukturs = Struktur::all();

    }

    public function render()
    {
        return view('livewire.organisasi-page');
    }
}
