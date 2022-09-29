<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan_penelitian extends Model
{
    use HasFactory;
    protected $table = 'pengajuan_penelitians';
    protected $fillable = [
        'Nama_Peneliti',
        'Email',
        'No_Telepon',
        'Alamat',
        'objek_peneliatin',
        'Judul_Peneliatan',
        'file',
        'name',
        'extension',
        'size',
        'mime',
    ];
}
