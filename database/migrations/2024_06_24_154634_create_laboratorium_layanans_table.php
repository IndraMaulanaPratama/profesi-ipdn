<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('LABORATORIUM_LAYANAN', function (Blueprint $table) {
            $table->string('LAYANAN_ID', 36)->primary()->comment('Primary key table layanan laboratorium');
            $table->string('LAYANAN_JUDUL', 255)->comment('Judul layanan');
            $table->text('LAYANAN_DESKRIPSI')->comment('Isi konten layanan');
            $table->integer('LAYANAN_URUTAN')->comment('Urutan konten');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('LAYANAN_OFFICER');
            $table->foreign('LAYANAN_OFFICER')->references('id')->on('users');
            $table->unsignedBigInteger('LAYANAN_OFFICER', 255)->nullable()->change()->comment('Foreign Key ke table user sebagai petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LABORATORIUM_LAYANAN');
    }
};
