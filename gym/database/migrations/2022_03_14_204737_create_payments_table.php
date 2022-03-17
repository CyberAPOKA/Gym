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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("contract_id")->unsigned();
            $table->foreign("contract_id")->references("id")->on("contracts");
            $table->double("value");
            $table->integer("parcel_number");
            $table->date("due_date");
            $table->date("original_due_date");
            $table->string("asaas_payment_id");
            $table->bigInteger("status")->unsigned();
            $table->foreign("status")->references("id")->on("status");
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
        Schema::dropIfExists('payments');
    }
};
