<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //['produit_id','libelle','qte','prix_unitaire'];
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('libelle');
            $table->string('qte');
            $table->string('prix_unitaire');
            $table->timestamps();
            $table->unsignedBigInteger('categorie_id');
 
    $table->foreign('categorie_id')->references('id')->on('categories');
    $table->unsignedBigInteger('fournisseur_id');
 
    $table->foreign('fournisseur_id')->references('id')->on('fournisseurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
