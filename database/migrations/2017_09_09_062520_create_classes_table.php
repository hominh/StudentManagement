<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('academic_id')->unsigned();
            $table->foreign('academic_id')->references('id')->on('academics')->onDelete('cascade');
            $table->integer('level_id')->unsigned();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->integer('shift_id')->unsigned();
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->integer('time_id')->unsigned();
            $table->foreign('time_id')->references('id')->on('times')->onDelete('cascade');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->integer('batch_id')->unsigned();
            $table->foreign('batch_id')->references('id')->on('batches')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
