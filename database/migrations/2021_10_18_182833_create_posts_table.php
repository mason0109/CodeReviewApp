<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('userID');
            $table->string('title');
            $table->string('description');
            $table->string('documentUpload'); //string for now but will need 
                                              //to allow for uploads of files
            $table->integer('no.OfViews');
            $table->integer('no.OfComments'); //each comment will be an instance on 'comment'
            $table->integer('no.OfReviews');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
