<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('request_from')->unsigned();
            $table->integer('request_to')->unsigned();
            $table->string('request_status')->default('sent');
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
        Schema::drop('friend_systems');
    }
}
