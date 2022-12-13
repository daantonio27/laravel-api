<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommendeitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commendeitems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commande_id')->unsigned()->index();
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->integer('produit_id')->unsigned()->index();
            $table->foreign('produit_id')->references('id')->on('produits');
            /*
                $table->integer('commande_id');
                $table->integer('produit_id');
            */
            $table->integer('quantite');
            $table->decimal('prix',10,2);
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
        Schema::dropIfExists('commendeitems');
    }
}
