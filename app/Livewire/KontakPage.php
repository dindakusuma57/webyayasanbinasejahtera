<?php

namespace App\Livewire;

use App\Models\Pesan;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class KontakPage extends Component
{
    // Properties to hold the user's input
    public $nama_depan;
    public $nama_belakang;
    public $no_telp;
    public $email;
    public $pesan;

    // Validation rules for the input fields
    protected $rules = [
        'nama_depan' => 'required|string|max:50',
        'nama_belakang' => 'required|string|max:50',
        'no_telp' => 'required|string|max:15',
        'email' => 'required|email|max:100',
        'pesan' => 'required|string|max:500',
    ];

    // Method to handle the submission of the message
    public function placePesan()
{
    try {
        $this->validate([
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'pesan' => 'required',
        ]);

        Pesan::create([
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'email' => $this->email,
            'no_telp' => $this->no_telp,
            'pesan' => $this->pesan,
        ]);

        $this->reset(['nama_depan', 'nama_belakang', 'email', 'no_telp', 'pesan']);
        session()->flash('message', 'Pesan Anda telah terkirim!');

        // Log pesan sukses
        Log::info('Pesan terkirim dari: ' . $this->email);

    } catch (\Exception $e) {
        // Log kesalahan
        Log::error('Error saat mengirim pesan: ' . $e->getMessage());
    }
}


    // Method to render the component view
    public function render()
    {
        return view('livewire.kontak-page');
    }
}
