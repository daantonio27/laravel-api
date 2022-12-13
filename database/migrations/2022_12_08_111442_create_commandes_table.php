<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->increments('id');

            /*
                $table->integer('produit_id')->unsigned()->index();
                $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');
                $table->integer('client_id')->unsigned()->index();
                $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
                //$table->integer('client_id')->unsigned()->nullable();
            */

            //$table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('set null');
            //$table->string('client_id');
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->text('description');
            $table->text('status');
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
        Schema::dropIfExists('commandes');
    }
}
