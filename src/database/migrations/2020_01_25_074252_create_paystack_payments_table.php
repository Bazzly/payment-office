<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaystackPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paystack_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('payment_type');
            $table->string('key')->default('pk_test_86d32aa1nV4l1da7120ce530f0b221c3cb97cbcc');
            $table->float('amount')->default('100000.00');
            $table->String('currency')->default('NGN');
            $table->string('ref')->default('1000042323424');
            $table->string('email');
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
        Schema::dropIfExists('paystack_payments');
    }
}
