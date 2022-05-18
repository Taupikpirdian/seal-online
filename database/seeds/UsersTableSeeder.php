<?php

use Illuminate\Database\Seeder;
use App\Group;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group  = Group::where('name', 'Admin Master')->first();
        $user_admin = new User();
        $user_admin->name = 'Admin Master';
        $user_admin->username = 'admin@seal.id';
        $user_admin->email = 'admin@seal.id';
        $user_admin->password = bcrypt('aaa123');
        $user_admin->save();
        $user_admin->groups()->attach($group);
    }
}
