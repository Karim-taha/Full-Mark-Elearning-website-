<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("t_national_id");
            $table->decimal("t_acc_reccivable",$precision = 8, $scale = 2);
            $table->decimal("t_net_income",$precision = 8, $scale = 2);
            $table->text("description");
            $table->string("t_link_facebook");
            $table->string("t_link_youtube");
            $table->float("rating" , 8 , 2)->default(0);
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')
                                    ->on('users')
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
        Schema::dropIfExists('teachers');
    }
}