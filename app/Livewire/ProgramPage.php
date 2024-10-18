<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program; // Pastikan untuk mengimpor model yang sesuai

class ProgramPage extends Component
{
    public $programs; // Properti untuk menyimpan data program

    public function mount() // Metode ini dijalankan saat komponen di-inisialisasi
    {
        $this->programs = Program::all(); // Mengambil semua data program dari database
    }

    public function render()
    {
        return view('livewire.program-page', [
            'programs' => $this->programs // Mengirim data ke tampilan
        ]);
    }
}

