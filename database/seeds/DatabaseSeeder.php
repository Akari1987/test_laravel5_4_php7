<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(MessagesSeeder::class);
         $this->call(Test2Seeder::class);
         $this->call(FollowedSeeder::class);
         $this->call(MongoUserSeeder::class);
         $this->call(MessageGroupSeeder::class);
         $this->call(MongoMessageSeeder::class);
    }
}
