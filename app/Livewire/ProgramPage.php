<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Program;
use Livewire\Attributes\Title;

#[Title('Program - Yayasan Bina Sejahtera')]

class ProgramPage extends Component
{
    use WithPagination;

    public function render()
    {
        $programs = Program::paginate(6);

        return view('livewire.program-page', [
            'programs' => $programs
        ]);
    }
}


