<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAddFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_add_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();

            $table->string('year')->nullable();
            $table->string('term')->nullable();
            $table->string('program')->nullable();
            $table->string('level')->nullable();
            $table->string('national_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('dr_name')->nullable();
            $table->string('phone')->nullable();

            $table->string('hour_number')->nullable();
            $table->string('level_rate')->nullable();
            $table->string('Cumulative_average')->nullable();

            
            $table->string('course_code')->nullable();
            $table->string('course_name')->nullable();
            $table->string('course_hour_number')->nullable();
            $table->string('number_of_register_course')->nullable();
            $table->string('code_of_least_order')->nullable();
            $table->string('Theoretical_lecture_dates')->nullable();
            $table->string('Practical_lesson_dates')->nullable();
            $table->string('type')->nullable();
            $table->string('notes')->nullable();

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
        Schema::dropIfExists('course_add_forms');
    }
}
