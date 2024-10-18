<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\SejarahPage;

Route::get('/', HomePage::class);
Route::get('/sejarah', SejarahPage::class);


