<?php

use Illuminate\Database\Seeder;
use App\UserGroup;

class UserGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_groups = new UserGroup();
        $user_groups->group_id  = 1;
        $user_groups->user_id   = 1;
        $user_groups->save();
    }
}
