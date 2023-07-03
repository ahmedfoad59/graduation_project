<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('form1s', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('level')->nullable();
            $table->string('collage_id')->nullable();
            $table->string('dr_name')->nullable();

            $table->string('subject')->nullable();
            $table->string('exams')->nullable();
            $table->string('shar')->nullable();
            $table->string('Duties')->nullable();
            $table->string('Attendance')->nullable(); 
            $table->string('the_behavior')->nullable();
            $table->string('Recommendations')->nullable();
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
        Schema::dropIfExists('form1s');
    }
}
