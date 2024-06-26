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
        Schema::create('LABORATORIUM_PELATIHAN', function (Blueprint $table) {
            $table->string('PELATIHAN_ID', 36)->primary()->comment('Primary key table layanan pelatihan');
            $table->string('PELATIHAN_JUDUL', 255)->comment('Judul layanan');
            $table->text('PELATIHAN_DESKRIPSI')->nullable()->comment('Isi konten layanan');
            $table->integer('PELATIHAN_URUTAN')->comment('Urutan konten');
            $table->string('PELATIHAN_TAUTAN', 255)->nullable()->comment('Tautan untuk pelatihan');
            $table->enum('PELATIHAN_KATEGORI', ['pelatihan', 'sumber'])->comment('Pemisah konten antara pelatihan dan sumber');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('PELATIHAN_OFFICER');
            $table->foreign('PELATIHAN_OFFICER')->references('id')->on('users');
            $table->unsignedBigInteger('PELATIHAN_OFFICER', 255)->nullable()->change()->comment('Foreign Key ke table user sebagai petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LABORATORIUM_PELATIHAN');
    }
};
