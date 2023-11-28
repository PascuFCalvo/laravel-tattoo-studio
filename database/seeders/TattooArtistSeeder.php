<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TattooArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_tattoo-artists')->insert([
            'user_id' => 24,
            'user_name' => "8sqpFW2rbv",
            'email' => 'tattoo@gmail.com',
            'password' => 1234,
            'phone' => 666666666,
            'role' => 'tattoo',
            'licenseNumber' => '123456789',
            'formation' => 'Tattoo artist',
        ]);
    }
}
