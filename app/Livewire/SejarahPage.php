<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sejarah;
use App\Models\Kepengurusan;

class SejarahPage extends Component
{
    public $sejarahs;
    public $kepengurusans;
    public $selectedCategoryId; // Menyimpan ID kategori yang dipilih

    public function mount($id = null)
    {
        // Mengambil semua sejarah dan kepengurusan
        $this->sejarahs = Sejarah::all();
        $this->kepengurusans = Kepengurusan::all();

        // Jika ada ID kategori, ambil data kepengurusan sesuai kategori
        if ($id) {
            $this->kepengurusans = Kepengurusan::where('categorypengurus_id', $id)->get();
        }
    }

    public function render()
    {
        return view('livewire.sejarah-page');
    }
}




