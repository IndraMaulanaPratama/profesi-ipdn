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
        Schema::create('KEGIATAN', function (Blueprint $table) {
            $table->string('KEGIATAN_ID', 36)->primary()->comment('Primary key UUID');
            $table->string('KEGIATAN_JUDUL', 255)->comment('Judul kegiatan');
            $table->text('KEGIATAN_ISI')->comment('Isi Content');
            $table->string('KEGIATAN_THUMBNAIL')->comment('Gambar header kegiatan');

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
        Schema::dropIfExists('KEGIATAN');
    }
};
