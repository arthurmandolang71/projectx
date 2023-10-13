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
        Schema::table('caleg_pendukung', function (Blueprint $table) {
            $table->foreignUuid('user_update_kabkota')->nullable();;
            $table->foreignUuid('user_update_prov')->nullable();;
            $table->foreignUuid('user_update_ri')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caleg_pendukung', function (Blueprint $table) {
            $table->dropColumn(['user_update_kabkota', 'user_update_kabkota', 'user_update_kabkota']);
        });
    }
};
