<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogSmestaj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_smestaj', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();
            $table->integer('smestaj_id')->unsigned();
        });
        Schema::table('blog_smestaj', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            $table->foreign('smestaj_id')->references('id')->on('smestaj')
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

        Schema::dropIfExists('blog_smestaj');
    }
}
