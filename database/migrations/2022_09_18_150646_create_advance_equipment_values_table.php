<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvanceEquipmentValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_equipment_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->string('engine')->nullable();
            $table->string('transmission_type')->nullable();
            $table->string('truck_speed')->nullable();
            $table->string('apu_epu')->nullable();
            $table->string('bunks')->nullable();
            $table->string('camera_orientation')->nullable();
            $table->string('camera_recording')->nullable();
            $table->string('can_truck_taken_home')->nullable();
            $table->string('truck_permanently_assigned')->nullable();
            $table->string('onboard_navigation')->nullable();
            $table->string('onboard_communication')->nullable();
            $table->string('directtv')->nullable();
            $table->string('inverter')->nullable();
            $table->string('siriusxm')->nullable();
            $table->string('refrigerator')->nullable();
            $table->string('microwave')->nullable();
            $table->string('collision_mitigation')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs');
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
        Schema::dropIfExists('advance_equipment_values');
    }
}
