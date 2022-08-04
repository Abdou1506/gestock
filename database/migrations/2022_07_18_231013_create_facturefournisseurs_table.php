<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturefournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturefournisseurs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('qte');
            $table->string('prix');
            $table->timestamps();
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
        Schema::dropIfExists('facturefournisseurs');
    }
}
