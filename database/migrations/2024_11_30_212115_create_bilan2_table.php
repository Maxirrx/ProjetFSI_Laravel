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
        Schema::create('bilan2', function (Blueprint $table) {
            $table->id();
            $table->string('LibBil2');
            $table->int('NotBil2');
            $table->int('NotOral2');
            $table->string('SujBil2');
            $table->date('DatBil2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilan2');
    }
};
