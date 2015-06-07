<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMistressSubsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('mistress_subs', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('mistress_id')->unsigned();
            $table->integer('sub_id')->unsigned();
            $table->timestamps();
            
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('mistress_subs', function(Blueprint $table) {
            Schema::drop('mistress_subs');
        });
         */
    }

}
