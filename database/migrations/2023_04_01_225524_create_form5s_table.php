<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form5s', function (Blueprint $table) {
            $table->id();
            $table->string('num_meet')->nullable();
            $table->string('date')->nullable();
            $table->string('plase')->nullable();
            $table->string('time')->nullable();
            $table->string('studetn_num_true')->nullable();
            $table->string('studetn_num_fals')->nullable();
            $table->string('subject1')->nullable();
            $table->string('Recommendations1')->nullable();

            $table->string('subject2')->nullable();
            $table->string('Recommendations2')->nullable();

            $table->string('subject3')->nullable();
            $table->string('Recommendations3')->nullable();
            
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
        Schema::dropIfExists('form5s');
    }
}
