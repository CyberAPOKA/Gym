<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string("name");
            $table->string("phone_number");
            $table->bigInteger("gym_plan_id")->unsigned()->nullable();
            $table->foreign('gym_plan_id')->references('id')->on('gym_plans');
            $table->date("birthday");
            $table->string("city");
            $table->string("province");
            $table->string("address");
            $table->string("address_number");
            $table->string("asaas_client_id")->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
};
