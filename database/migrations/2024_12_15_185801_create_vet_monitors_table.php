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
        Schema::create('vet_monitors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id'); // Foreign key ke record_ternak
            $table->date('tanggal');
            $table->text('diagnosa');
            $table->string('obat')->nullable();
            $table->string('foto_hewan')->nullable();
            $table->string('health_status'); // Status kesehatan (sehat/sakit)
            $table->timestamps();
            $table->foreign('tag_id')->references('id')->on('record_ternak')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vet_monitors');
    }
};
