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
        Schema::create('level_pendidikan_tertinggi', function (Blueprint $table) {
            $table->id('pk_id_level_pendidikan_tertinggi');
            $table->string('nama_level_pendidikan');
            $table->string('kode_level_pendidikan');
            $table->enum('dosen',['y','t']);
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
        Schema::dropIfExists('level_pendidikan_tertinggi');
    }
};
