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
        Schema::create('nominals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembiayaan_id')->constrained()->onDelete('cascade');
            $table->bigInteger('total_nominal');
            $table->bigInteger('nominal_awal');
            $table->bigInteger('nominal_akhir');
            $table->enum('status', ['Belum Cair', 'Sebagian Cair', 'Sudah Cair'])->default('Belum Cair');
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominals');
    }
};
