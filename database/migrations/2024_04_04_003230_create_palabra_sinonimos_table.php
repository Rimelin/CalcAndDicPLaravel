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
        Schema::create('palabra_sinonimo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('palabra_id')->constrained()->onDelete('cascade');
            $table->foreignId('sinonimo_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('palabra_sinonimos');
    }
};
