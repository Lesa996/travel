<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IzletPutovanje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izlet_putovanje', function (Blueprint $table) {
            $table->integer('izlet_id')->unsigned();
            $table->integer('putovanje_id')->unsigned();
        });
        Schema::table('izlet_putovanje', function (Blueprint $table) {
            $table->foreign('izlet_id')->references('id')->on('izlets')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('putovanje_id')->references('id')->on('putovanja')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('izlet_putovanje');
    }
}
