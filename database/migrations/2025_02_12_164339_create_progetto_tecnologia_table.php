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
        Schema::create('progetto_tecnologia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('progetto_id')->constrained('progetti')->onDelete('cascade');
            $table->foreignId('tecnologia_id')->constrained('tecnologie')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progetto_tecnologia');
    }
};
