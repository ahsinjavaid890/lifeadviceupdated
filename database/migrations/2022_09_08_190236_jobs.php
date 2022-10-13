<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('how_often_will_driver_get_home')->nullable();
            $table->string('custom_home_time')->nullable();
            $table->string('job_tittle')->nullable();
            $table->string('driver_type')->nullable();
            $table->string('home_time');
            $table->longtext('freight_type')->nullable();
            $table->string('dedicated_account')->nullable();
            $table->string('avg_weekly_mile')->nullable();
            $table->string('compensation')->nullable();
            $table->string('duty_time')->nullable();
            $table->string('compensation_ammount')->nullable();
            $table->string('top_10_of_earners_are_makking')->nullable();
            $table->string('avgerage_weekly_pay')->nullable();
            $table->string('avgerage_yearly_pay')->nullable();
            $table->longtext('sign_on_bonus')->nullable();
            $table->string('sign_on_bonus_amount')->nullable();            
            $table->string('freight_type_equipment')->nullable();
            $table->string('drop_and_hook')->nullable();
            $table->string('live_load')->nullable();
            $table->string('driver_load')->nullable();
            $table->longtext('benifits')->nullable();  
            $table->longtext('primary_running_lanes')->nullable();  
            $table->string('avg_length_of_haul')->nullable();  
            $table->string('type_of_fuel_card')->nullable();
            $table->string('tolls')->nullable();
            $table->string('hour_dispatch')->nullable();
            $table->string('ez_Pass')->nullable();
            $table->string('pre_pass')->nullable();
            $table->string('non_forced_dispatch')->nullable();
            $table->foreign('company_id')->references('id')->on('companies');
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
        Schema::dropIfExists('jobs');
    }
}
