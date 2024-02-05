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
        Schema::create('file', function (Blueprint $table) {
            $table->id();
            $table->string('namaFile');
            $table->string('lokasiFile');
            $table->text('deskFile');
            $table->unsignedBigInteger('album_id');
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('kategori_id');
            $table->foreign('album_id')->references('id')->on('album');
            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file');
    }
};
