<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runs', function (Blueprint $table) {
            $table->bigIncrements('idRun');
            $table->bigInteger('eventId')->unsigned()->nullable();
            $table->string('runType')->nullable();
            $table->string('runName')->nullable();
            $table->string('runNameLong')->nullable();
            $table->bigInteger('runPrice')->nullable();
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
        Schema::dropIfExists('runs');
    }
}
