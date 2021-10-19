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
            $table->integer('numOfViews')->defult(0);
            $table->integer('numOfComments')->defult(0); //each comment will be an instance on 'comment'
            $table->integer('numOfReviews')->defult(0);
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
