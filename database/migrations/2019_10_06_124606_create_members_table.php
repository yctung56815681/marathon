<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('idMember');
            $table->string('memberTwId')->nullable();
            $table->string('memberName')->nullable();
            $table->string('memberGender')->nullable();
            $table->string('memberYear')->nullable();
            $table->string('memberMonth')->nullable();
            $table->string('memberDay')->nullable();
            $table->string('memberCity')->nullable();
            $table->string('memberTown')->nullable();
            $table->string('memberAddr')->nullable();
            $table->string('memberEmail')->nullable();
            $table->string('memberMobile')->nullable();
            $table->string('memberEmergencyContact')->nullable();
            $table->string('memberEmergencyRelationship')->nullable();
            $table->string('memberEmergencyMobile')->nullable();
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
        Schema::dropIfExists('members');
    }
}
