<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'image'];

    protected $casts = [
        'image' => 'array',
    ];
}
