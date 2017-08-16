<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'test',
        //     'email' => 'test@test.com',
        //     'password' => bcrypt('testtest')
        // ]);
        $user = new User();
        $user->id_st = "i";
        $user->name = "い";
        $user->profile = "こちらテストユーザー";
        $user->email = "test@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ro";
        $user->name = "ろ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test2@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/2.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ha";
        $user->name = "は";
        $user->profile = "こちらテストユーザー";
        $user->email = "test3@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/3.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ni";
        $user->name = "に";
        $user->profile = "こちらテストユーザー";
        $user->email = "test4@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/4.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ho";
        $user->name = "ほ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test5@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/5.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "he";
        $user->name = "へ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test6@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/6.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "to";
        $user->name = "と";
        $user->profile = "こちらテストユーザー";
        $user->email = "test7@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/7.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ti";
        $user->name = "ち";
        $user->profile = "こちらテストユーザー";
        $user->email = "test8@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/8.png";
        $user->save();
        
         $user = new User();
        $user->id_st = "ri";
        $user->name = "り";
        $user->profile = "こちらテストユーザー";
        $user->email = "test9@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "nu";
        $user->name = "ぬ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test10@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/2.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ru";
        $user->name = "る";
        $user->profile = "こちらテストユーザー";
        $user->email = "test11@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/3.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "wo";
        $user->name = "を";
        $user->profile = "こちらテストユーザー";
        $user->email = "test12@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/4.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "wa";
        $user->name = "わ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test13@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/5.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ka";
        $user->name = "か";
        $user->profile = "こちらテストユーザー";
        $user->email = "test14@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/6.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "yo";
        $user->name = "よ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test15@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/7.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ta";
        $user->name = "た";
        $user->profile = "こちらテストユーザー";
        $user->email = "test16@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/8.png";
        $user->save();
        
         $user = new User();
        $user->id_st = "re";
        $user->name = "れ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test17@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "i";
        $user->name = "い";
        $user->profile = "こちらテストユーザー";
        $user->email = "test@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ro";
        $user->name = "ろ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test2@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/2.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ha";
        $user->name = "は";
        $user->profile = "こちらテストユーザー";
        $user->email = "test3@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/3.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ni";
        $user->name = "に";
        $user->profile = "こちらテストユーザー";
        $user->email = "test4@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/4.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ho";
        $user->name = "ほ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test5@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/5.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "he";
        $user->name = "へ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test6@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/6.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "to";
        $user->name = "と";
        $user->profile = "こちらテストユーザー";
        $user->email = "test7@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/7.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ti";
        $user->name = "ち";
        $user->profile = "こちらテストユーザー";
        $user->email = "test8@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/8.png";
        $user->save();
        
         $user = new User();
        $user->id_st = "ri";
        $user->name = "り";
        $user->profile = "こちらテストユーザー";
        $user->email = "test9@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "nu";
        $user->name = "ぬ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test10@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/2.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ru";
        $user->name = "る";
        $user->profile = "こちらテストユーザー";
        $user->email = "test11@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/3.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "wo";
        $user->name = "を";
        $user->profile = "こちらテストユーザー";
        $user->email = "test12@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/4.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "wa";
        $user->name = "わ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test13@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/5.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ka";
        $user->name = "か";
        $user->profile = "こちらテストユーザー";
        $user->email = "test14@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/6.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "yo";
        $user->name = "よ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test15@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/7.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ta";
        $user->name = "た";
        $user->profile = "こちらテストユーザー";
        $user->email = "test16@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/8.png";
        $user->save();
        
         $user = new User();
        $user->id_st = "re";
        $user->name = "れ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test17@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "i";
        $user->name = "い";
        $user->profile = "こちらテストユーザー";
        $user->email = "test@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ro";
        $user->name = "ろ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test2@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/2.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ha";
        $user->name = "は";
        $user->profile = "こちらテストユーザー";
        $user->email = "test3@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/3.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ni";
        $user->name = "に";
        $user->profile = "こちらテストユーザー";
        $user->email = "test4@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/4.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ho";
        $user->name = "ほ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test5@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/5.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "he";
        $user->name = "へ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test6@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/6.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "to";
        $user->name = "と";
        $user->profile = "こちらテストユーザー";
        $user->email = "test7@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/7.jpg";
        $user->save();
        
        $user = new User();
        $user->id_st = "ti";
        $user->name = "ち";
        $user->profile = "こちらテストユーザー";
        $user->email = "test8@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/8.png";
        $user->save();
        
         $user = new User();
        $user->id_st = "ri";
        $user->name = "り";
        $user->profile = "こちらテストユーザー";
        $user->email = "test9@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "nu";
        $user->name = "ぬ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test10@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/2.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ru";
        $user->name = "る";
        $user->profile = "こちらテストユーザー";
        $user->email = "test11@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/3.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "wo";
        $user->name = "を";
        $user->profile = "こちらテストユーザー";
        $user->email = "test12@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/4.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "wa";
        $user->name = "わ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test13@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/5.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ka";
        $user->name = "か";
        $user->profile = "こちらテストユーザー";
        $user->email = "test14@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/6.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "yo";
        $user->name = "よ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test15@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/7.jpg";
        $user->save();
        
         $user = new User();
        $user->id_st = "ta";
        $user->name = "た";
        $user->profile = "こちらテストユーザー";
        $user->email = "test16@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/8.png";
        $user->save();
        
         $user = new User();
        $user->id_st = "re";
        $user->name = "れ";
        $user->profile = "こちらテストユーザー";
        $user->email = "test17@test.com";
        $user->password = bcrypt("testtest");
        $user->avatar = "users/avatar/1.jpg";
        $user->save();
    }
}
