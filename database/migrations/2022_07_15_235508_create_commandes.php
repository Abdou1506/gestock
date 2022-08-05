<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            
            $table->string('adresse');
            $table->string('etat');
            $table->timestamps();
            $table->unsignedBigInteger('client_id');
 
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('produit_id');
 
            $table->foreign('produit_id')->references('id')->on('produits');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
