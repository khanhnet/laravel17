<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description',500)->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('content')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->comment('id cua ng tao bao viet');
            $table->string('slug')->unique()->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('view_count')->default(0); 
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
