<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_rating', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("teacher_id");
            $table->unsignedBigInteger("user_id");
            $table->float("value", 3 , 2);
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_rating');
    }
}