<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('naslov');
            $table->string('opis');
            $table->string('status');
            $table->string('objekt');
            $table->string('adresa');
            $table->string('grad');
            $table->string('opstina');
            $table->integer('cena');
            $table->string('namesten');
            $table->string('parno');
            $table->string('lift');
            $table->integer('kat');
            $table->integer('vremetraenje');
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
        Schema::drop('advertisements');
    }
}
