<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCenovnikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cenovnik', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tip');
            $table->date('datum_od');
            $table->date('datum_do');
            $table->string('cena');
            $table->integer('smestaj_id')->unsigned();
            $table->integer('putovanje_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('cenovnik', function (Blueprint $table) {
            $table->foreign('smestaj_id')->references('id')->on('smestaj');
            $table->foreign('putovanje_id')->references('id')->on('putovanja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cenovnik');
    }
}
