<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTableFactureclientProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factureclient_produit', function (Blueprint $table) {
            $table->id();
            $table->foreignid('factureclient_id')->constrained()->oneDelete('cascade');
            $table->foreignid('produit_id')->constrained()->oneDelete('cascade');
            $table->integer('qte');
            $table->integer('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factureclient_produit');
    }
}
