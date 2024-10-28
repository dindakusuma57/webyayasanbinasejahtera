<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sejarah;
use App\Models\Kepengurusan;
use Livewire\Attributes\Title;

#[Title('Sejarah - Yayasan Bina Sejahtera')]
class SejarahPage extends Component
{
    public $sejarahs;
    public $kepengurusans;
    public $selectedCategoryId;

    public function mount($id = null)
    {
        $this->sejarahs = Sejarah::all();
        $this->kepengurusans = Kepengurusan::all();

        if ($id) {
            $this->kepengurusans = Kepengurusan::where('categorypengurus_id', $id)->get();
        }
    }

    public function render()
    {
        return view('livewire.sejarah-page');
    }
}




