<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenyu extends Model
{
    use HasFactory;
    protected $table = 'data_penyus';
    protected $dates = [
      'created_at',
      'updated_at',
      'deleted_at',
      'tanggal'
  ];
    protected $fillable = [
      'jml_penyu_naik',
      'penyu_bertelur',
      'telur_penyu',
      'penyu_menetas',
      'tanggal'
    ];
}
