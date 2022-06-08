<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('house_No');
            $table->string('sex');
            $table->integer('phoneNo');
            $table->integer('bank_account');
            $table->timestamps();
            //$table->unsignedBigInteger('Admin_id');
           // $table->foreign('Admin_id')->references('id')->on('Admin');
        });

    }


    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
