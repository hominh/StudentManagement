<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('firstname',20);
            $table->string('lastname',20);
            $table->boolean('sex');
            $table->date('dob');
            $table->string('100')->nullable();
            $table->string('status',100);
            $table->string('nationality',50)->nullable();
            $table->string('nationality_card',50)->nullable();
            $table->string('passport',50)->nullable();
            $table->string('phone',50)->nullable();
            $table->string('village',50)->nullable();
            $table->string('commune',50)->nullable();
            $table->string('district',50)->nullable();
            $table->string('province',50)->nullable();
            $table->string('current_address',100)->nullable();
            $table->date('dateregisted');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('photo',200)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
