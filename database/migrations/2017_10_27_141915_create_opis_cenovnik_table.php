<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpisCenovnikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('opis_cenovnik', function (Blueprint $table) {
            $table->increments('id');
            $table->text('napomena_cenovnik');
            $table->text('obuhvata');
            $table->text('neobuhvata');
            $table->text('dinamika_placanja');
            $table->text('nacin_placanja');
            $table->text('nacin_prijave');
            $table->integer('putovanje_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('opis_cenovnik', function (Blueprint $table) {
            $table->foreign('putovanje_id')->references('id')->on('putovanja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opis_cenovnik');
    }
}
