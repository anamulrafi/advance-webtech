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
        //
           //
           Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('userName');
            $table->string('password');
            $table->string('email');
            $table->string('phoneNumber');
            $table->string('nidNO');
            $table->string('address');
            $table->string('gender');
            $table->integer('age');
            $table->string('image')->nullable();
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
        //
    }
};
