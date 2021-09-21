<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_teachers', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')
                                        ->on('teachers')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');

            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')
                                        ->on('courses')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
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
        Schema::dropIfExists('course_teachers');
    }
}