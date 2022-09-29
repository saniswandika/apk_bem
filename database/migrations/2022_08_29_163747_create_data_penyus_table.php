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
        Schema::create('data_penyus', function (Blueprint $table) {
            $table->id();
            $table->integer('jml_penyu_naik');
            $table->integer('penyu_bertelur');
            $table->integer('telur_penyu');
            $table->integer('penyu_menetas');
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
        Schema::dropIfExists('data_penyus');
    }
};
