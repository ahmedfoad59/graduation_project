<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForm4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form4s', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('collage_id')->nullable();
            $table->string('subject1')->nullable();
            $table->string('subject2')->nullable();
            $table->string('subject3')->nullable();
            $table->string('subject4')->nullable();
            $table->string('Recommendations1')->nullable();
            $table->string('Recommendations2')->nullable();
            $table->string('Recommendations3')->nullable();
            $table->string('Recommendations4')->nullable();

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
        Schema::dropIfExists('form4s');
    }
}
