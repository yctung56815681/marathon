<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('idEvent');
            // $table->string('eventNo')->nullable();
            $table->bigInteger('cityId')->nullable()->unsigned();
            $table->timestamp('eventSignupStartTime')->nullable();
            $table->timestamp('eventSignupEndTime')->nullable();
            $table->timestamp('eventRunStartTime')->nullable();
            $table->timestamp('eventRunEndTime')->nullable();
            $table->string('eventTittle')->nullable();
            $table->string('eventImage')->nullable();
            $table->string('eventTel')->nullable();
            $table->string('eventAddr')->nullable();
            $table->timestamps();
            $table->foreign('cityId')->references('idCity')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
