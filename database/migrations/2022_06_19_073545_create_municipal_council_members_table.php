<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalCouncilMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipal_council_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('certification');
            $table->text('description')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_member_id');
            $table->string('image');
            $table->boolean('active')->default(true);
            $table->text('facebook');
            $table->text('instagram');
            $table->text('twitter');
            $table->text('linkedin');
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
        Schema::dropIfExists('municipal_council_members');
    }
}
