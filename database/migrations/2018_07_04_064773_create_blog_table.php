<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!schema::hasTable('blog')){
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('title');
            $table->string('keyword');
            $table->longText('description');
            $table->string('figure');
            $table->string('heading');
            $table->longText('fullstory');
            $table->boolean('status');
           // $table->foreign('category_id')->references('id')->on('category');
           // $table->foreign('users_id')->references('id')->on('users');
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
