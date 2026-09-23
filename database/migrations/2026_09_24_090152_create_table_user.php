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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('npm');
            $table->foreignId('jurusan_id')->constrained('jurusan');
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropForeign(['kelas_id']);
        });

        Schema::dropIfExists('kelas');
        Schema::dropIfExists('user');

    }
};
