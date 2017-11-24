<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePutovanjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('putovanja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->enum('status',['aktivno','neaktivno','arhivirano']);
            $table->string('cena_od');
            $table->string('precrtana_cena');
            $table->integer('broj_dana');
            $table->integer('broj_noci');
            $table->string('vrsta_prevoza');
            $table->string('obroci');
            $table->string('grupa');
            $table->string('drzava');
            $table->string('grad');
            $table->string('lat');
            $table->string('lng');
            $table->enum('slajder', [0, 1])->default(0);
            $table->enum('glavni_slajder', [0, 1])->default(0);

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
        Schema::dropIfExists('putovanja');
    }
}
