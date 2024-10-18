<?php

namespace App\Livewire;

use App\Models\Hero;
use App\Models\Tentang;
use App\Models\Manajemen;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Unit;



#[Title('Home Page - Yayasan Bina Sejahtera')]
class HomePage extends Component
{
    public function render() {
        $heroes = Hero::all();
        $tentang = Tentang::first();
        $units = Unit::all();
        $manajemens = Manajemen::all();

        return view('livewire.home-page', [
            'heroes' => $heroes,
            'tentang' => $tentang,
            'units' => $units,
            'manajemens' => $manajemens,
        ]);
    }
}
