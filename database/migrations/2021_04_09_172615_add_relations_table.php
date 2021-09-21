<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_students', function (Blueprint $table) {
            //
            $table->foreign('student_id')->references('id')
                                        ->on('students')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');

            $table->foreign('group_id')->references('id')
                                        ->on('groups')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade');
            

        }); 
    
        Schema::table('groups', function (Blueprint $table) {
            //
            $table->foreign('course_teacher_id')->references('id')
                    ->on('course_teachers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            

        }); 
        Schema::table('group_students' , function (Blueprint $table){
            $table->foreign('payment_id')->references('id')
                    ->on('payments')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
        Schema::table('payments', function (Blueprint $table) {
            //
            $table->foreign('students_id')->references('id')
                                        ->on('students')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade'); 
                                        
            $table->foreign('group_id')->references('id')
                                        ->on('groups')
                                        ->onUpdate('cascade')
                                        ->onDelete('cascade'); 
                                        
        });


        
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}