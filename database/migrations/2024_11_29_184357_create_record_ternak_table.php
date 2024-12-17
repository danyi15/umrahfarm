<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordTernakTable extends Migration
{
    public function up()
{
    Schema::create('record_ternak', function (Blueprint $table) {
        $table->id('tag_id');
        $table->string('name');
        $table->string('jenis_hewan');
        $table->string('jenis_kelamin');
        $table->string('lahir_beli');
        $table->decimal('berat_awal', 8, 2); // Jika kolom berat_awal belum ada
        $table->date('tanggal_lahir'); // Menggunakan tipe data date
        $table->date('tanggal_beli');  // Menggunakan tipe data date
        $table->integer('harga_beli');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('record_ternak');
    }


}
