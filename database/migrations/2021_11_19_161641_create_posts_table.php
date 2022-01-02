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
            $table->string('title');
            // $table->dropForeign(['answers_categories_id_foreign']);
            // $table->foreignId('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreignId('categories_id');
            // $table->dropForeign(['answers_user_id_foreign']);
            // $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->date('datestart');
            $table->date('dateend');
            $table->text('deskripsi');
            $table->string('excerpt');
            $table->string('slug')->unique();
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
