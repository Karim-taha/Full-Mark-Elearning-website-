<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->text("description");
            $table->integer("max_no_student");
            $table->date("start_date");
            $table->date("end_date");
            $table->time("start_time")->nullable();
            $table->time("end_time")->nullable();
            $table->integer("no_lec");
            $table->decimal("price",$precision = 10, $scale = 2);
            $table->integer('discount')->default(0);
            $table->unsignedBigInteger('course_teacher_id');
            $table->text('requirements');
            $table->string('briefDescription');
            $table->string('language');
            $table->text('whatLearn');
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
        Schema::dropIfExists('groups');
    }
}