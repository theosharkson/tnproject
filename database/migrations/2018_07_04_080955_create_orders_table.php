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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('process_status')->nullable()->unsigned();
            $table->foreign('process_status')->references('id')->on('process_statuses');
            $table->integer('payment_status')->nullable()->unsigned();
            $table->foreign('payment_status')->references('id')->on('payment_statuses');
            $table->timestamp('date')->nullable(); 
            $table->string('location')->nullable();
            $table->integer('payment_method')->unsigned()->nullable();
            $table->foreign('payment_method')->references('id')->on('payment_methods');
            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->string('promo_code')->nullable(); //can keep promo codes in a table with discount % or amount
            $table->integer('active_status')->default('1');
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
        Schema::dropIfExists('orders');
    }
}
