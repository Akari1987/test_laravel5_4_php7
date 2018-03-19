<?php

use Illuminate\Database\Seeder;

use App\Message;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $message = new Message();
        $message->body = "Seeded sample";
        $message->user_id = 1;
        $message->receiver_id = 2;
        $message->read = 0;
        $message->save();
        
        $message = new Message();
        $message->body = "Seeded sample2";
        $message->user_id = 2;
        $message->receiver_id = 1;
        $message->read = 0;
        $message->save();
        
        $message = new Message();
        $message->body = "Seeded sample3";
        $message->user_id = 3;
        $message->receiver_id = 1;
        $message->read = 0;
        $message->save();
        
        $message = new Message();
        $message->body = "Seeded sample4";
        $message->user_id = 3;
        $message->receiver_id = 1;
        $message->read = 0;
        $message->save();
    }
}
