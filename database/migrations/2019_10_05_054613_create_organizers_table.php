<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->bigIncrements('idOrganizer');
            $table->bigInteger('eventId')->unsigned()->nullable();
            $table->string('organizerName')->nullable();
            $table->string('organizerWeb')->nullable();
            $table->string('organizerAddr')->nullable();
            $table->string('organizerTel')->nullable();
            $table->string('organizerEmail')->nullable();
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
        Schema::dropIfExists('organizers');
    }
}
