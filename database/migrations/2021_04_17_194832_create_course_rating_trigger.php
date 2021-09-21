<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCourseRatingTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER course_rating_trigger_on_insert AFTER INSERT ON course_rating
            FOR EACH ROW
            BEGIN
                UPDATE courses SET courses.rating = (SELECT AVG(value) from course_rating GROUP BY course_id HAVING course_id = NEW.course_id) where courses.id = NEW.course_id;
            END;

            CREATE TRIGGER course_rating_trigger_on_update AFTER UPDATE ON course_rating
            FOR EACH ROW
            BEGIN
            UPDATE courses SET courses.rating = (SELECT AVG(value) from course_rating GROUP BY course_id HAVING course_id = NEW.course_id) where courses.id = NEW.course_id;
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
        Schema::dropIfExists('course_rating_trigger');
    }
}
