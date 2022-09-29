<?php

namespace Database\Seeders;

use App\Models\DataPenyu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\status;
use Illuminate\Support\Str;
class statustable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'belum bayar',
                'slug' => Str::slug('belum bayar'),
                'created_at' => now(),
            ],
            [
                'name' => 'konfirmasi ulang',
                'slug' => Str::slug('konfirmasi ulang'),
                'created_at' => now(),
            ],
            [
                'name' => 'berhasil',
                'slug' => Str::slug('berhasil'),
                'created_at' => now(),
            ],
           
        ];
        status::insert($data);

        $data_dummy = [
            [
                'jml_penyu_naik' => 1,
                'penyu_bertelur' => 3,
                'telur_penyu' => 2,
                'penyu_menetas' => 6,
                'tanggal' => now(),
            ],
        ];
        DataPenyu::insert($data_dummy);
    }
}
