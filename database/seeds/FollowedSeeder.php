<?php

use Illuminate\Database\Seeder;
use App\Followed;

class FollowedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $followed = new Followed();
        $followed->from = 1;
        $followed->save();
        
        $followed = new Followed();
        $followed->from = 2;
        $followed->save();
        
        $followed = new Followed();
        $followed->from = 2;
        $followed->save();
        
        $followed = new Followed();
        $followed->from = 3;
        $followed->save();
        
        $followed = new Followed();
        $followed->from = 4;
        $followed->save();
        
        $followed = new Followed();
        $followed->from = 4;
        $followed->save();
    }
}
