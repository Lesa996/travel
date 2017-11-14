<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpisPutovanjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('opis_putovanja', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kratak_opis');
            $table->text('destinacija');
            $table->text('napomena');
            $table->text('dodatna_napomena');
            $table->text('rok_prijava');
            $table->text('min_putnika');
            $table->text('rok_otkaz');
            $table->text('organizator');
            $table->string('program');
            $table->text('licenca');
            $table->text('garancija');
            $table->integer('putovanje_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('opis_putovanja', function (Blueprint $table) {
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
        Schema::dropIfExists('opis_putovanja');
    }
}
