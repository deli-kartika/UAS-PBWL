<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_transaksi', function (Blueprint $table) {
            $table->increments('transaksi_id');
            $table->integer('anggota_id')->unsigned();
            $table->integer('id_iuran')->unsigned();
            $table->date('transaksi_tgl_bayar');
            $table->date('tanggal_jatuhtempo');
            $table->timestamps();
        });

        Schema::table('tb_transaksi', function (Blueprint $table) {         
            $table->foreign('anggota_id')->references('id_anggota')->on('tb_anggota')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_iuran')->references('iuran_id')->on('tb_iuran')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_anggota');
    }
};
