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
            //quando si usano le string per evitare errori
            //aggiungere in appServiceProvider
            //la Facade Schema
            $table->string('title');//string (VARCHAR)
            $table->string('body');//medium (STRINGA MEDIUM)
            $table->timestamps();//gestisce campi created_at e updated_at
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
