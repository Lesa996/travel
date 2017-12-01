<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogPutovanje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_putovanje', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();
            $table->integer('putovanje_id')->unsigned();
        });
        Schema::table('blog_putovanje', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')
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

        Schema::dropIfExists('blog_putovanje');
    }
}
