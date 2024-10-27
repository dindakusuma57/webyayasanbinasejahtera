<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\OrganisasiPage;
use App\Livewire\SejarahPage;
use App\Livewire\VisimisiPage;
use App\Livewire\OrganisasiPagePage;
use App\Livewire\ProgramPage;
use App\Livewire\ProgramDetailPage;
use App\Livewire\PpdbPage;
use App\Livewire\KontakPage;

Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);
Route::get('/visimisi', VisimisiPage::class);
Route::get('/organisasi', OrganisasiPage::class);
Route::get('/program', ProgramPage::class)->name('program.index');
Route::get('/program/{slug}', ProgramDetailPage::class)->name('program.show');
Route::get('/ppdb', PpdbPage::class);
Route::get('/kontak', KontakPage::class);


Route::post('/kontak', [KontakPage::class, 'store']);



