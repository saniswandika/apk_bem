<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Peneliti');
            $table->string('Email');
            $table->string('No_Telepon');
            $table->string('Alamat');
            $table->string('objek_peneliatin');
            $table->string('Judul_Peneliatan');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_penelitians');
    }
};
