<?php

use Illuminate\Database\Seeder;

use App\MongoMessage;

class MongoMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mongoMessage = new MongoMessage();
        $mongoMessage->user_id = 1;
        $mongoMessage->group = 1;
        $mongoMessage->body = "Seeded sample";
        $mongoMessage->save();
        
        $mongoMessage = new MongoMessage();
        $mongoMessage->user_id = 2;
        $mongoMessage->group = 1;
        $mongoMessage->body = "Seeded sample2";
        $mongoMessage->save();
        
        $mongoMessage = new MongoMessage();
        $mongoMessage->user_id = 4;
        $mongoMessage->group = 1;
        $mongoMessage->body = "Seeded sample3";
        $mongoMessage->save();
        
        $mongoMessage = new MongoMessage();
        $mongoMessage->user_id = 1;
        $mongoMessage->group = 2;
        $mongoMessage->body = "Seeded sample4";
        $mongoMessage->save();
        
        $mongoMessage = new MongoMessage();
        $mongoMessage->user_id = 3;
        $mongoMessage->group = 2;
        $mongoMessage->body = "Seeded sample5";
        $mongoMessage->save();
    }
}
