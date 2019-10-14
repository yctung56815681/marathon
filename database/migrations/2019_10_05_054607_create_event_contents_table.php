<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_contents', function (Blueprint $table) {
            $table->bigIncrements('idEventContent');
            $table->bigInteger('eventId')->unsigned()->nullable();
            $table->longText('eventContentNews')->nullable();
            $table->longText('eventContentSignup')->nullable();
            $table->longText('eventContentReward')->nullable();
            $table->longText('eventContentActSpec')->nullable();
            $table->timestamps();
            $table->foreign('eventId')->references('idEvent')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_contents');
    }
}
