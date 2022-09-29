<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publish_penelitian extends Model
{
    use HasFactory;
    protected $table = 'publish_penelitians';
    protected $fillable = [
        'judul_penelitian',
        'nama_penelitian',
        'waktu_penelitian',
        'file_publish',
        'extension',
        'size',
        'mime',
        'status',
       'deskripsi_penelitian',
    ];
}
