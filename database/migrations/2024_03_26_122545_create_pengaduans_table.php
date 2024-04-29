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
        Schema::create('PENGADUAN', function (Blueprint $table) {
            $table->string('PENGADUAN_ID', 36)->primary()->comment('Primary key untuk laporan pengaduan');
            $table->string('PENGADUAN_EMAIL', 150)->nullable()->comment('Email pengirim laporan pengaduan');
            $table->string('PENGADUAN_NAME', 150)->nullable()->comment('Nama pengirim laporan pengaduan');
            $table->text('PENGADUAN_VALUE')->comment('Isi daripada laporan pengaduan');
            $table->text('PENGADUAN_ATTACHMENT')->nullable()->comment('Lampiran untuk bukti pengaduan');

            $table->unsignedBigInteger('PENGADUAN_OFFICER');
            $table->text('PENGADUAN_SOLUTION')->nullable()->comment('Jawaban dari petugas pelayanan pengaduan')->comment('Jawaban dari petugas pengaduan');
            $table->enum('PENGADUAN_STATUS', ['Proses', 'Selesai'])->default('Proses')->comment('Status Pengaduan');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('PENGADUAN_OFFICER')->references('id')->on('users');
            $table->unsignedBigInteger('PENGADUAN_OFFICER', 255)->nullable()->change()->comment('Foreign Key ke table user sebagai petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PENGADUAN');
    }
};
