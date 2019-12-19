<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameDynamicDaysToPpl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('villas',function($table){
             $table->renameColumn('dynamic_villa_days','dynamic_villa_ppl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('villas',function($table){
             $table->renameColumn('dynamic_villa_ppl','dynamic_villa_days');
        });
    }
}
