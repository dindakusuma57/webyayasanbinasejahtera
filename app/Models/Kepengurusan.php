<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;

class Kepengurusan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['categorypengurus_id', 'judul','slug', 'deskripsi', 'image','is_active'];

    protected $casts = [
        'image' => 'string',
    ];

    public function categorypengurus() {
        return $this->belongsTo(Categorypengurus::class);
    }

    

}
