<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoorganizersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coorganizers', function (Blueprint $table) {
            $table->bigIncrements('idCoorganizer');
            $table->bigInteger('eventId')->unsigned()->nullable();
            $table->string('coorganizerName')->nullable();
            $table->string('coorganizerWeb')->nullable();
            $table->string('coorganizerAddr')->nullable();
            $table->string('coorganizerTel')->nullable();
            $table->string('coorganizerEmail')->nullable();
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
        Schema::dropIfExists('coorganizers');
    }
}
