<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('username','web-superadmin')->orWhere('email','web-superadmin')->first();
        if($user) {
        	User::where('id',$user->id)->delete();
        }

        User::create([
        	'username' => 'web-superadmin',
        	'email' => 'web@superadmin.com',
        	'name' => 'Superadmin Web',
        	'password' => bcrypt('web-superadmin-@123#'),
        ]);

        echo 'done';
    }
}
