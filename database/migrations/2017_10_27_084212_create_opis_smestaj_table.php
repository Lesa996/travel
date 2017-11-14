<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpisSmestajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opis_smestaj', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kratak_opis');
            $table->text('opis');
            $table->string('adresa');
            $table->string('link');
            $table->integer('smestaj_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('opis_smestaj', function (Blueprint $table) {
            $table->foreign('smestaj_id')->references('id')->on('smestaj')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opis_smestaj');
    }
}
