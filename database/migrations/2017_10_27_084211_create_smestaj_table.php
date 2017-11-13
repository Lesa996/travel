<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmestajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('smestaj', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->string('tip_objekta');
            $table->integer('broj_zvezdica');
            $table->string('vrsta_soba');
            $table->string('tip_soba');
            $table->string('broj_ljudi');
            $table->string('struktura_sobe');
            $table->string('sadrzaj_sobe');
            $table->integer('udaljenost_centar')->nullable();
            $table->integer('udaljenost_plaza')->nullable();
            $table->integer('udaljenost_stanica')->nullable();
            $table->integer('udaljenost_zicara')->nullable();
            $table->string('dodatni_sadrzaj');
            $table->string('napomena_hotel');
            $table->string('drzava');
            $table->string('grad');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smestaj');
    }
}
