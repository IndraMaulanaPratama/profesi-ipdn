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
        Schema::create('KURIKULUM', function (Blueprint $table) {
            $table->string('KURIKULUM_ID', 36)->primary()->comment('Primary key table kurikulum');
            $table->string('KURIKULUM_KODE', 10)->comment('Kode kurikulum pembelajaran');
            $table->string('KURIKULUM_MATAKULIAH', 200)->comment('Nama matakuliah');
            $table->integer('KURIKULUM_SKS')->comment('jumlah sks per-mata kuliah');
            $table->enum('KURIKULUM_SEMESTER', [1, 2])->comment('penempatan semester kuliah');
            $table->integer('KURIKULUM_URUTAN')->comment('urutan tampilan data');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('KURIKULUM_OFFICER');
            $table->foreign('KURIKULUM_OFFICER')->references('id')->on('users');
            $table->unsignedBigInteger('KURIKULUM_OFFICER', 255)->nullable()->change()->comment('Foreign Key ke table user sebagai petugas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('KURIKULUM');
    }
};
