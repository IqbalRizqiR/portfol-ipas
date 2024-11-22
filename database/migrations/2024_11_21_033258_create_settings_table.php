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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok')->nullable();
            $table->string('logo_kelompok')->nullable();
            $table->string('short_aboutus')->nullable();
            $table->string('short_aboutproject')->nullable();
            $table->string('text_aboutus')->nullable();
            $table->string('text_aboutproject')->nullable();
            $table->string('text_landasanteori')->nullable();
            $table->string('text_alat')->nullable();
            $table->string('text_bahan')->nullable();
            $table->string('text_hasil')->nullable();
            $table->string('text_kesimpulan')->nullable();
            $table->string('jadwalkegiatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
