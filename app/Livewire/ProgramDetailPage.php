<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;
use Livewire\Attributes\Title;

#[Title('Detail Program - Yayasan Bina Sejahtera')]

class ProgramDetailPage extends Component
{
    public $slug;
    public $program;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->program = Program::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.program-detail-page', [
            'program' => $this->program,
        ]);
    }
}

