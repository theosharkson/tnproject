<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderPackageExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_package_extras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_package_id')->unsigned();
            $table->foreign('order_package_id')->references('id')->on('order_packages');
            $table->integer('extra_id')->unsigned();
            $table->foreign('extra_id')->references('id')->on('extras');
            $table->integer('quantity')->default(1);
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
        Schema::dropIfExists('order_package_extras');
    }
}
