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
        Schema::create('BIAYA_PENDIDIKAN', function (Blueprint $table) {
            $table->string('PENDIDIKAN_ID', 36)->primary()->comment('Primary key table biaya pendidikan');
            $table->string('PENDIDIKAN_NAMA', 250)->comment('Nama biaya pendidikan');
            $table->string('PENDIDIKAN_SATUAN', 250)->comment('Satuan biaya pendidikan');
            $table->integer('PENDIDIKAN_TARIF')->comment('Tarif biaya pendidikan');
            $table->unsignedBigInteger('PENDIDIKAN_OFFICER');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('PENDIDIKAN_OFFICER')->references('id')->on('users');
            $table->unsignedBigInteger('PENDIDIKAN_OFFICER', 255)->nullable()->change()->comment('Foreign Key ke table user sebagai petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BIAYA_PENDIDIKAN');
    }
};
