<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $timestamps = true;
    public function up()
    {
        Schema::dropIfExists('dokumens');
        Schema::create('dokumens', function (Blueprint $table) {
            $table->increments('id');            
            $table->date('tanggal');
            $table->unsignedInteger('dokumen_id');
            $table->foreign('dokumen_id')->references('dokumen_id')->on('jenis_dokumens');
            $table->string('nama_pegawai');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('gaji');
            $table->unsignedInteger('jabatan_id');
            $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatans');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
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
        Schema::dropIfExists('dokumens');
    }
}
