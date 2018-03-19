<?php

use Illuminate\Database\Seeder;

use App\models\mongo_based\MessageGroup;

class MessageGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messageGroup = new MessageGroup();
        $messageGroup->user_id = 1;
        $messageGroup->save();
    }
}
