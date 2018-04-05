<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->unsigned();
            $table->string('isbn');
            $table->string('title');
            $table->text('description');
            $table->string('author');
            $table->string('publisher');
            $table->string('keywords');
            $table->string('image');
            $table->string('condition');
            $table->double('price');
            $table->timestamps();
            $table->foreign('uid')->references('id')->on('users');
            $table->index(['author'], 'author');
            $table->index(['publisher'], 'publisher');
            $table->index(['title', 'condition'], 'title_conditions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
