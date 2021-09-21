<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherRatingTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER teacher_rating_trigger_on_insert AFTER INSERT ON teacher_rating
            FOR EACH ROW
            BEGIN
                UPDATE teachers SET teachers.rating = (SELECT AVG(value) from teacher_rating GROUP BY teacher_id HAVING teacher_id = NEW.teacher_id) where teachers.id = NEW.teacher_id;
            END;
            
            CREATE TRIGGER teacher_rating_trigger_on_update AFTER UPDATE ON teacher_rating
            FOR EACH ROW
            BEGIN
            UPDATE teachers SET teachers.rating = (SELECT AVG(value) from teacher_rating GROUP BY teacher_id HAVING teacher_id = NEW.teacher_id) where teachers.id = NEW.teacher_id;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_rating_trigger');
    }
}