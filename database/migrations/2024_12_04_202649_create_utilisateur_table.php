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
            $table->integer('NbMaxEtu3');
            $table->integer('NbMaxEtu4');
            $table->integer('NbMaxEtu5');
            $table->unsignedBigInteger('entreprise_id');
            $table->unsignedBigInteger('maitreapprentissage_id');
            $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('specialite_id');
            $table->unsignedBigInteger('typeutilisateur_id');
            $table->unsignedBigInteger('tueur_id');
            $table->timestamps();
            $table->foreign('entreprise_id')->references('id')->on('entreprise');
            $table->foreign('maitreapprentissage_id')->references('id')->on('maitreapprentissage');
            $table->foreign('classe_id')->references('id')->on('classe');
            $table->foreign('specialite_id')->references('id')->on('specialite');
            $table->foreign('typeutilisateur_id')->references('id')->on('typeutilisateur');
            $table->foreign('tueur_id')->references('id')->on('utilisateur');
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
