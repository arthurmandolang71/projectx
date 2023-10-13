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
        Schema::create('caleg_pendukung', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('dpt')->unique()->index();
            $table->foreignUuid('dapil_ri')->nullable();;
            $table->foreignUuid('dapil_prov')->nullable();;
            $table->foreignUuid('dapil_kabkota')->nullable();
            // $table->string('ktp')->nullable();
            $table->string('nama')->nullable();
            // $table->string('tempat_lahir')->nullable();
            // $table->string('tanggal_lahir')->nullable();
            // $table->string('strtime_tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            // $table->string('status_perkawinan')->nullable();
            // $table->string('agama')->nullable();
            // $table->string('pekerjaan')->nullable();
            $table->string('usia')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            // $table->string('alamat_detail')->nullable();
            // $table->string('no_hp')->nullable();
            // $table->string('no_wa')->nullable();
            $table->string('kabkota')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan_desa')->nullable();
            $table->string('tps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caleg_pendukung');
    }
};
