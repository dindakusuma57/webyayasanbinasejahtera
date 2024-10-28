<?php

namespace App\Livewire;
use App\Models\Visi;
use App\Models\Misi;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Visi Misi - Yayasan Bina Sejahtera')]
class VisimisiPage extends Component
{
    public $visis;
    public $misis;

    public function mount()
    {
        $this->visis = Visi::all();
        $this->misis = Misi::all();
    }

    public function render()
    {
        return view('livewire.visimisi-page');
    }
}
