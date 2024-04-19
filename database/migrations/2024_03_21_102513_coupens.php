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
        Schema::create('coupens', function (Blueprint $table) {
            $table->id();
            $table->string('coupen_code');
            $table->integer('ammount');
            $table->string('ammount_type');
            $table->integer('expiry_date');

            $table->string('status');   
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
