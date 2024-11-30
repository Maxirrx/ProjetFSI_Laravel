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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('LogUti');
            $table->string('MdpUti');
            $table->string('TelUti');
            $table->string('MailUti');
            $table->string('NomUti');
            $table->string('PreUti');
            $table->boolean('AltUti');
            $table->string('AdrUti');
            $table->string('CpUti');
            $table->string('VilUti');
            $table->int('NbMaxEtu3');
            $table->int('NbMaxEtu4');
            $table->int('NbMaxEtu5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateur');
    }
};
