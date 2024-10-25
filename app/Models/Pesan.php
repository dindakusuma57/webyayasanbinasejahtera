<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_depan','nama_belakang','email','no_telp','pesan'];

    public function getFullnameAttribute() {
        return "{$this->nama_depan} {$this->nama_belakang}";
    }

}
