<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\UploadedFile;

class Kepengurusan extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['judul', 'deskripsi', 'image'];

    public function categorypengurus() {
        return $this->belongsTo(Categorypengurus::class);
    }

    public function setImageAttribute($value)
    {
        if ($value instanceof UploadedFile) {
            $this->attributes['image'] = $value->store('images', 'public'); // Store the uploaded file
        } else {
            $this->attributes['image'] = $value; // Handle string URL/path
        }
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('categorypengurus_id', $categoryId);
    }
}
