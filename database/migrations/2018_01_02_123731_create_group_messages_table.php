<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// use Validator;

class CreateGroupMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')->create('group_messages', function (Blueprint $collection) {
            // $collection->increments('id');
            // $collection->timestamps();
            // $collection->text('body')->required();
            // $collection->string('body2')->required();
            // $collection->unsignedInteger('sender_id');   
            // $collection->integer('message_group_id')->unsigned();
            // $collection->integer('read')->unsigned();
            // $varidator = Validator::make( 
                
            // );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->drop('group_messages');
    }
}
