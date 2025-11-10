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
        Schema::create('proposalsx', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tema_id')->constrained()->onDelete('cascade');
            $table->string('judul');
            $table->string('keyword');
            $table->text('abstract');
            $table->string('referensi')->nullable();
            $table->string('file_pdf');
            $table->enum('status', ['Incomplete', 'Submit', 'Accept Reviewer', 'Reject Reviewer', 'Accept Editor', 'Reject Editor', 'Publish', 'Rejected'])->default('Incomplete');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposalsx');
    }
};
