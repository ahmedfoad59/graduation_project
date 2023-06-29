<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawal_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('universty_id')->nullable();
            $table->string('year')->nullable();
            $table->string('term')->nullable();
            $table->string('program')->nullable();
            $table->string('level')->nullable();
            $table->string('hour_number')->nullable();
            $table->string('dr_name')->nullable();
            $table->string('date')->nullable();
            $table->string('coure_code')->nullable();
            $table->string('coure_name')->nullable();
            $table->string('coure_hours')->nullable(); 

            $table->string('uiversity_required')->nullable();
            $table->string('uiversity_optional')->nullable();
            $table->string('college_required')->nullable();
            $table->string('college_optional')->nullable();
            $table->string('specialty_required')->nullable();
            $table->string('specialty_optional')->nullable();

            
            $table->string('hours_after_withdraw')->nullable();
          

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
        Schema::dropIfExists('withdrawal_forms');
    }
}
