<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('villa_description');
            $table->text('address');
            $table->string('location');
            $table->string('state');
            $table->double('price');
            $table->text('contact_manager');
            $table->text('features');
            $table->text('amenities');
            $table->text('availability');
            $table->string('sleeps');
            $table->string('bedrooms');
            $table->string('bathrooms');
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
        Schema::dropIfExists('villas');
    }
}
