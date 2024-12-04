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
            $table->integer('NotBil2');
            $table->integer('NotOral2');
            $table->string('SujBil2');
            $table->date('DatBil2');
            $table->unsignedBigInteger('utilisateur_id');
            $table->timestamps();
            $table->foreign('utilisateur_id')->references('id')->on('utilisateur');
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
