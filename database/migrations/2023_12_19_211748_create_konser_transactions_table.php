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
        Schema::create('konser_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konser_id')->constrained('konsers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_lengkap');
            $table->string('identitas');
            $table->string('nomor_identitas');
            $table->string('email');
            $table->string('no_telp');
            $table->string('quantity');
            $table->string('total');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konser_transactions');
    }
};
