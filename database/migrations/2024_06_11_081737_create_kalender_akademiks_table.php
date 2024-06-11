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
        Schema::create('KALENDER_AKADEMIK', function (Blueprint $table) {
            $table->string('KALENDER_ID', 36)->primary()->comment('Id table kalender akademik');
            $table->integer('KALENDER_TAHUN_AJARAN')->nullable(true)->comment('Tahun ajaran kalender akademik');
            $table->string('KALENDER_TANGGAL')->comment('Range tanggal kegiatan');
            $table->integer('KALENDER_SEMESTER')->comment('Keterangan semester perkuliahan');
            $table->string('KALENDER_KEGIATAN', 250)->comment('Nama kegiatan perkuliahan');
            $table->integer('KALENDER_URUTAN')->comment('Urutan data');

            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('KALENDER_OFFICER');
            $table->foreign('KALENDER_OFFICER')->references('id')->on('users');
            $table->unsignedBigInteger('KALENDER_OFFICER', 255)->nullable()->change()->comment('Foreign Key ke table user sebagai petugas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KALENDER_AKADEMIK');
    }
};
