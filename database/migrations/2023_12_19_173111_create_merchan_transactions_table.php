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
        Schema::create('merchan_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('merch_id')->constrained('merchandises')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('merchan_transactions');
    }
};
