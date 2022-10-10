<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConnectUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('connect_us', function (Blueprint $table) {
            $table->id();
            $table->string('linkFacebook');
            $table->string('linkTwitter');
            $table->string('linkYoutube');
            $table->text('address');
            $table->string('phone');
            $table->text('aboutUs');
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
        Schema::dropIfExists('connect_us');
    }
}
