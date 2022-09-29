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
        Schema::create('publish_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('judul_penelitian');
            $table->string('nama_penelitian');
            $table->dateTime('waktu_penelitian');
            $table->string('deskripsi_penelitian');
            $table->string('file_publish');
            $table->string('extension');
            $table->integer('size');
            $table->string('mime');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('publish_penelitians');
    }
};
