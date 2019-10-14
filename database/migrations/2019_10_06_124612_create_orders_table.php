<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('idOrder');
            $table->string('orderNo')->nullable();
            $table->bigInteger('orderStatus')->unsigned()->nullable();
            $table->bigInteger('orderRevoke')->unsigned()->nullable();
            $table->bigInteger('orderGroupId')->unsigned()->nullable();
            $table->bigInteger('memberId')->unsigned()->nullable();
            $table->bigInteger('runId')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('orderGroupId')->references('idOrderGroup')->on('order_groups');
            $table->foreign('memberId')->references('idMember')->on('members');
            $table->foreign('runId')->references('idRun')->on('runs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
