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
        Schema::create('bookedrooms', function (Blueprint $table) {
            $table->id();
            $table->string('RoomNo');
            $table->string('Branch');
            $table->string('NID');
            $table->string('Address');
            $table->string('Email');
            $table->integer('Phone');
            $table->string('CIT');
            $table->string('COT');
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
