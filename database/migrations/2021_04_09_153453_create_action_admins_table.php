<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_admins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text("description");
            $table->integer("previous_value");
            $table->integer("new_value");
            
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')
                                        ->on('admins')
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
        Schema::dropIfExists('action_admins');
    }
}