<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            // $table->tinyInteger('type')->nullable();
            $table->tinyInteger('Admission_and_transfer')->nullable();

            $table->tinyInteger('Commitment_to_the')->nullable();

            $table->tinyInteger('Teaching_methods_and')->nullable();

            $table->tinyInteger('Method_of_treatment')->nullable();

            $table->tinyInteger('program_educational')->nullable();

            $table->tinyInteger('Field_Training')->nullable();


            $table->tinyInteger('Laboratories_lab')->nullable();

            $table->tinyInteger('Teaching_and_learning')->nullable();

            $table->tinyInteger('Academic_Advising')->nullable();

            $table->tinyInteger('Quarterly_business')->nullable();

            $table->tinyInteger('Private_lessons')->nullable();

            $table->tinyInteger('University_book')->nullable();

            $table->tinyInteger('numerical_density')->nullable();

            $table->tinyInteger('The_methods_used_i')->nullable();

            $table->tinyInteger('Student_activities')->nullable();


            $table->tinyInteger('Scholarships')->nullable();

            $table->tinyInteger('Encouraging_excell')->nullable();

            $table->tinyInteger('Availability_of_infor')->nullable();

            $table->tinyInteger('Non_discrimination')->nullable();

            $table->tinyInteger('The_facilities_avai')->nullable();

            $table->tinyInteger('Effective_participation_in')->nullable();

            $table->tinyInteger('Program_management_credib')->nullable();

            $table->tinyInteger('Complaints_and_suggesti')->nullable();

            $table->tinyInteger('Services_provided_to_stu')->nullable();

            $table->tinyInteger('Services_provided_to')->nullable();
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
        Schema::dropIfExists('votes');
    }
}
