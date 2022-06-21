<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        $user = new User();
        $user->name = "Pascal Wilman";
        $user->email = "pascalwilman87@gmail.com";
        $user->password = Hash::make("member123");
        $user->level = "member";
        $user->save();

        // 2
        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make("administrator123");
        $user->level = "admin";
        $user->save();

        // 3
        $user = new User();
        $user->name = "Kelvin Yurcel";
        $user->email = "kelvinyurcel002@gmail.com";
        $user->password = Hash::make("member123");
        $user->level = "member";
        $user->save();

        // 4
        $user = new User();
        $user->name = "Diva Amanda";
        $user->email = "divaamanda@gmail.com";
        $user->password = Hash::make("member123");
        $user->level = "member";
        $user->save();

        // 5
        $user = new User();
        $user->name = "Kezia Paramitha";
        $user->email = "keziaparamitha@gmail.com";
        $user->password = Hash::make("member123");
        $user->level = "member";
        $user->save();

        // 6
        $user = new User();
        $user->name = "Vanessa";
        $user->email = "vanessa001@gmail.com";
        $user->password = Hash::make("member123");
        $user->level = "member";
        $user->save();
    }
}
