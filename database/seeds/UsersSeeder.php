<?php

use Illuminate\Database\Seeder;
use App\Role;
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
        //

        $adminbesarRole = new Role();
        $adminbesarRole->name="adminbesar";
        $adminbesarRole->display_name="Admin";
        $adminbesarRole->save();

        $admin = new Role();
        $admin->name="admin";
        $admin->display_name="admin";
    $admin->save();

        $admin = new User();
        $admin->name="Admin Besar";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        // $admin->is_verified=1;
        $admin->save();
        $admin->attachRole($adminbesarRole);

    //     $member = new User();
    //     $member->name="Sample Member";
    //     $member->email="member@gmail.com";
    //     $member->password=bcrypt('rahasia');
    //     $member->is_verified=1;
    //     $member->save();
    //     $member->attachRole($memberRole);
        
}
    }

