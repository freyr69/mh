<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function(Blueprint $table) {
            /* @var $table \Illuminate\Database\Schema\Blueprint */
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->dateTime('due_on');
            $table->boolean('complete')->default(0);
            $table->dateTime('completed_on')->nullable();
            $table->boolean('verified')->default(0);
            $table->dateTime('verified_on')->nullable();
            $table->text('verified_notes')->nullable();
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }

}
