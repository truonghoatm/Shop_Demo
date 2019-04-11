<?php

use App\Http\Controllers\RoleConstant;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123456');
        $user->address = 'Ha Noi';
        $user->phone = '0912345678';
        $user->image = '';
        $user->role = RoleConstant::ADMIN;
        $user->save();
    }
}
