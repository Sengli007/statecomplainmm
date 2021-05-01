<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '09123456789',
            'password' => Hash::make('password'),
            'role'  => 'admin',
        ]);

        for($i=0; $i<10; $i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone' => Str::random(10),
                'password' => Hash::make('password'),
                'role' => 'user',
            ]);
        }
    }
}
