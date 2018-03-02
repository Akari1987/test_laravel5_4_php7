<?php

use Illuminate\Database\Seeder;
use App\MongoUser;

class MongoUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mongoUser = new MongoUser();
        $mongoUser->name = "Max";
        $mongoUser->sex = "Male";
        $mongoUser->save();
        
        $mongoUser = new MongoUser();
        $mongoUser->name = "Mike";
        $mongoUser->sex = "Male";
        $mongoUser->save();
        
        $mongoUser = new MongoUser();
        $mongoUser->name = "Anne";
        $mongoUser->sex = "Female";
        $mongoUser->save();
        
        $mongoUser = new MongoUser();
        $mongoUser->name = "John";
        $mongoUser->sex = "Male";
        $mongoUser->save();
        
        $mongoUser = new MongoUser();
        $mongoUser->name = "Monica";
        $mongoUser->sex = "female";
        $mongoUser->save();
    }
}
