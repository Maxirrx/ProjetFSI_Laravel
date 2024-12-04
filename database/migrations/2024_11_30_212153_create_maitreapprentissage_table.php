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
        Schema::create('maitreapprentissage', function (Blueprint $table) {
            $table->id();
            $table->string('TelMai');
            $table->string('MailMai');
            $table->string('NomMai');
            $table->string('PreMai');
            $table->unsignedBigInteger('entreprise_id');
            $table->timestamps();
            $table->foreign('entreprise_id')->references('id')->on('entreprise');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maitreapprentissage');
    }
};
