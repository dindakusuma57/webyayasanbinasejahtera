<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepengurusan extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'image'];

    public function categorypengurus() {
        return $this->belongsTo(Categorypengurus::class);
    }
}
