<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        // esta es la tabla intermedion que hay entre articles y tags para poder formar una relaiicon muchos a muchos 
        Schema::create('article_tag', function (Blueprint $table){ 
         
             $table->increments('id');
             $table->integer('article_id')->unsigned();
             $table->integer('tag_id')->unsigned();
             $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
             $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');


      
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
