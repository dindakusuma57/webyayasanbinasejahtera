<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'image' => 'nullable|string',
        'deskripsi' => 'nullable|string',
        'no_telp' => 'required|array', // Memastikan ini adalah array
        'sosmed' => 'required|array', // Memastikan ini adalah array
    ]);

    // Proses penyimpanan data
    $footer = new Footer();
    $footer->judul = $request->judul;
    $footer->image = $request->image;
    $footer->deskripsi = $request->deskripsi;

    // Konversi array menjadi JSON sebelum menyimpan
    $footer->no_telp = json_encode($request->no_telp);
    $footer->sosmed = json_encode($request->sosmed);

    // Simpan ke database
    $footer->save();

    return redirect()->back()->with('success', 'Footer created successfully!');
}

}
