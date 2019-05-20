<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tnid')->unique()->nullable();
            $table->string('refrence_tnid')->nullable();
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('phonecode')->nullable();
            $table->string('phone_number')->unique()->nullable();
            $table->string('password');
            $table->double('coins')->nullable()->default(0);
            $table->string('address')->nullable();
            $table->string('location')->nullable();
            $table->integer('user_type')->unsigned()->default('1');
            $table->foreign('user_type')->references('id')->on('user_types');
            $table->integer('dashboard_activated')->default('0')->nullable();
            $table->string('image')->nullable();
            $table->integer('active_status')->default('1');
            $table->integer('updated_by')->unsigned()->nullable();
            $table->foreign('updated_by')->references('id')->on('users');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
