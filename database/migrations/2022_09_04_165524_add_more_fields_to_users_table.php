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
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat');
            $table->bigInteger('No_Hp');
            $table->bigInteger('jumlah_pengunjung');
            $table->bigInteger('total_bayar');
            $table->string('upload_pembayaran')->nullable();
            $table->string('name_pembayaran')->nullable();
            $table->string('extension')->nullable();
            $table->integer('size')->nullable();
            $table->string('mime')->nullable();
            $table->integer('status_id')->unsigned();
            // $table->enum('status', ['belum bayar', 'konfirmasi ulang', 'berhasil'])->default('belum bayar');
            $table->dateTime('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
