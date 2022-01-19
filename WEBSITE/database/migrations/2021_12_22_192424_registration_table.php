<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->bigIncrements('r_id');
            $table->string('fast_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('nid');
            $table->string('dob');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('division');
            $table->string('district');
            $table->string('upozila');
            $table->string('union');
            $table->string('ward');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
