<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_en')->nullable();
            $table->string('birth_day')->nullable();
            $table->string('birth_distination')->nullable();
            $table->string('national_number')->nullable();
            $table->string('nationality')->nullable();
            $table->string('nationality_date')->nullable();
            $table->string('nationality_distination')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('Certificate')->nullable();
            $table->string('section')->nullable();
            $table->string('total_degree')->nullable();
            $table->string('school')->nullable();
            $table->string('administration')->nullable();
            $table->string('governorate')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('email')->unique()->nullable();

            //college information
            $table->string('universty_id')->nullable();
            $table->string('college')->nullable();
            $table->string('department')->nullable();
            $table->string('group')->nullable();

            //father info
            $table->string('f_name')->nullable();
            $table->string('f_national_number')->nullable();
            $table->string('f_nationality')->nullable();
            $table->string('f_nationality_date')->nullable();
            $table->string('f_nationality_distination')->nullable();
            $table->string('f_passport_number')->nullable();
            $table->string('f_job')->nullable();
            $table->string('f_adress')->nullable();
            $table->string('f_phone')->nullable();
            $table->string('f_home_phone')->nullable();
            $table->string('f_email')->unique()->nullable();
            // $table->string('email')->unique();
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
        Schema::dropIfExists('students');
    }
}
