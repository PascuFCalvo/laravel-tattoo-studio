<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_users')->insert([
            'user_name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
            'phone' => 666666666,
            'role' => 'user',
        ]);

        DB::table('_users')->insert([
            'user_name' => Str::random(10),
            'email' => 'tattoo@gmail.com',
            'password' => Hash::make('password'),
            'phone' => 666666666,
            'role' => 'tattoo',
        ]);

        DB::table('_users')->insert([
            'user_name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'phone' => 666666666,
            'role' => 'admin',
        ]);

        DB::table('_users')->insert([
            'user_name' => Str::random(10),
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('password'),
            'phone' => 666666666,
            'role' => 'superadmin',
        ]);
    }
}
