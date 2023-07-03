<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm2sTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('form2s', function (Blueprint $table) {
            $table->id();
            $table->string('dr_name')->nullable();
            $table->string('level')->nullable();
            $table->string('name1')->nullable();
            $table->string('college_id1')->nullable();
            
            $table->string('name2')->nullable();
            $table->string('college_id2')->nullable();
            
            $table->string('name3')->nullable();
            $table->string('college_id3')->nullable();
            
            $table->string('name4')->nullable();
            $table->string('college_id4')->nullable();
            
            $table->string('name5')->nullable();
            $table->string('college_id5')->nullable();
            
            $table->string('name6')->nullable();
            $table->string('college_id6')->nullable();
            
            // $table->string('student_numer')->nullable();
            // $table->json('data')->nullable();
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
        Schema::dropIfExists('form2s');
    }
}
