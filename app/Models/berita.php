<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_berita', 'deskripsi_berita', 'gambar_image'
    ];

    public function limit()
    {
        return Str::limit($this->deskripsi_berita, berita::LIMIT );
    }
}

