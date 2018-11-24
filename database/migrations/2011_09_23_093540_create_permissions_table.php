<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('can_add')->nullable();
            $table->integer('can_edit')->nullable();
            $table->integer('can_delete')->nullable();
            $table->integer('can_view_log')->nullable();
            $table->integer('can_print')->nullable();
            $table->integer('user_type_id')->unsigned()->nullable();
            $table->foreign('user_type_id')->references('id')->on('user_types');
            $table->integer('feature_id')->unsigned()->nullable();
            $table->foreign('feature_id')->references('id')->on('features');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('permissions');
    }
}
