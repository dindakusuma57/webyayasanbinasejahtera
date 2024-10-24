<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorypengurus extends Model
{
    use HasFactory;

    protected $fillable = ['tahun','slug','is_active'];

    public function kepengurusans() {
        return $this->hasMany(Kepengurusan::class);
    }
}
