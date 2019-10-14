<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_groups', function (Blueprint $table) {
            $table->bigIncrements('idOrderGroup');
            $table->string('orderGroupNo')->nullable();
            $table->string('orderGroupName')->nullable();
            $table->bigInteger('eventId')->unsigned()->nullable();
            $table->string('orderGroupInvoiceLetterhead')->nullable();
            $table->string('orderGroupInvoiceNumber')->nullable();
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
        Schema::dropIfExists('order_groups');
    }
}
