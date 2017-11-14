<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanPutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_puta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dan');
            $table->text('opis');
            $table->integer('putovanje_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('plan_puta', function (Blueprint $table) {
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
        Schema::dropIfExists('plan_puta');
    }
}
