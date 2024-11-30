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
        Schema::create('bilan1', function (Blueprint $table) {
            $table->id();
            $table->string('LibBil1');
            $table->int('NotBil1');
            $table->string('RemBil1');
            $table->int('NotEnt');
            $table->int('NotOral');
            $table->date('DateBil1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilan1');
    }
};
