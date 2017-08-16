<?php

use Illuminate\Database\Seeder;
use App\Test2;

class Test2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new Test2();
        $test->content = "あ";
        $test->save();
        
        $test = new Test2();
        $test->content = "か";
        $test->save();
        
        $test = new Test2();
        $test->content = "さ";
        $test->save();
        
        $test = new Test2();
        $test->content = "た";
        $test->save();
        
        $test = new Test2();
        $test->content = "な";
        $test->save();
        
        $test = new Test2();
        $test->content = "は";
        $test->save();
    }
}
