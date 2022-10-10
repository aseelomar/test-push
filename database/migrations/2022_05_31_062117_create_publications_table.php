<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('goal')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');
            $table->string('image');
            $table->unsignedInteger('update_id')->nullable();
            $table->boolean('active')->default(true);
            $table->boolean('showSlider')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
