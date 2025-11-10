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
        Schema::create('nominalsx', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proposal_id')->constrained('proposalsx')->onDelete('cascade');
            $table->foreignId('sumber_id')->constrained()->onDelete('cascade');
            $table->foreignId('jenis_penelitian_id')->constrained()->onDelete('cascade');
            $table->string('nominal');
            $table->enum('status', ['Proses Pencairan', 'Pencairan Selesai']);
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominalsx');
    }
};
