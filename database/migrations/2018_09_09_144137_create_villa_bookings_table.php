<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillaBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villa_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->text('customer_name')->nullable();
            $table->text('email')->nullable();
            $table->text('villa_name')->nullable();
            $table->text('phone_no')->nullable();
            $table->text('message')->nullable();
            $table->integer('no_of_days')->nullable();
            $table->integer('no_of_guests')->nullable();
            $table->double('cost')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('villa_bookings');
    }
}
