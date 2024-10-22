<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination; // Import WithPagination
use App\Models\Program;
use Livewire\Attributes\Title;

#[Title('Program - Yayasan Bina Sejahtera')]

class ProgramPage extends Component
{
    use WithPagination; // Tambahkan trait ini untuk mendukung pagination di Livewire

    public function render()
    {
        // Ambil 8 program per halaman menggunakan paginate()
        $programs = Program::paginate(6);

        return view('livewire.program-page', [
            'programs' => $programs
        ]);
    }
}


