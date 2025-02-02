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
        Schema::create('paket_kabkota_prov', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('caleg_prov');
            $table->foreignUuid('caleg_kabkota');
            $table->boolean('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_kabkota_prov');
    }
};
