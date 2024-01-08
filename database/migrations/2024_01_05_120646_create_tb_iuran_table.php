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
        Schema::create('tb_iuran', function (Blueprint $table) {
            $table->increments('iuran_id');
            $table->date('iuran_tgl');
            $table->string('iuran_jenis');
            $table->string('iuran_jumlah'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_iuran');
    }
};
