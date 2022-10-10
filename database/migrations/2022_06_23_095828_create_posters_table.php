<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostersTable extends Migration
{

    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->boolean('active')->default(true);
            $table->unsignedInteger('user_id');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('posters');
    }
}
