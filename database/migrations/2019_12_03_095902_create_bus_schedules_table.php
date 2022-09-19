<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_schedules', function (Blueprint $table) {
            $table->bigIncrements('schedule_id');
            $table->integer('bus_id');
            $table->integer('operator_id');
            $table->integer('region_id');
            $table->integer('sub_region_id');
            $table->date('depart_date');
            $table->date('return_date');
            $table->time('depart_time');
            $table->time('return_time');
            $table->string('pickup_address');
            $table->string('dropoff_address');
            $table->boolean('status')->default(0); // active
            $table->timestamps();
        });
    }

    // we will add more field if require later okay.
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_schedules');
    }
}
