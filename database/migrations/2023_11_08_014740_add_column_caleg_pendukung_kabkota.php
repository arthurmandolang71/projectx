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
        Schema::table('caleg_pendukung_kabkota', function (Blueprint $table) {
            $table->foreignUuid('klasifikasi_bantuan_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('klasifikasi_bantuan_id', function (Blueprint $table) {
            $table->dropColumn(['klasifikasi_bantuan_id']);
        });
    }
};
