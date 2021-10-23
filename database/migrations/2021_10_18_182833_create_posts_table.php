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
            $table->unsignedInteger('authorID');
            $table->string('title');
            $table->string('description');
            $table->string('documentUpload'); //string for now but will need 
                                              //to allow for uploads of files
            $table->integer('numOfViews')->default(0);
            $table->integer('numOfComments')->default(0); 
            $table->integer('numOfReviews')->default(0);
            $table->timestamps();

            // $table->foreign('authorID')->references('id')->
            //     on('users')->onDelete('cascade')->onUpdate('cascade');
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
