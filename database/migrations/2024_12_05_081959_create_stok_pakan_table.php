<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
    Schema::create('stok_pakan', function (Blueprint $table) {
        $table->id();
        $table->string('jenis_pakan'); // Jenis pakan
        $table->decimal('stok_tersisa', 10, 2); // Stok tersisa
        $table->decimal('kebutuhan_harian', 10, 2); // Kebutuhan harian
        $table->date('perkiraan_habis')->nullable(); // Perkiraan habis
        $table->timestamps();

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_pakan');
    }
};
