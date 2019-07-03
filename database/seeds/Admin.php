<?php

use App\User;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = env('ADMIN_NAME');
        $admin->password = Hash::make(env('ADMIN_PASS'));
        $admin->email = env('ADMIN_EMAIL');
        $admin->email_verified_at = now();
        $admin->save();
    }
}
