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
            'user_id' => 30,
            'user_name' => "VYFMnqcBTZ",
            'email' => 'tattoo@gmail.com',
            'password' => "$2y$12$.BjDn.Wp2p5PW6Hlr7tjfOoi1wYTSmo0WH3NjIaHDtfTBeViP9FK.",
            'phone' => 666666666,
            'role' => 'tattoo',
            'licenseNumber' => '123456789',
            'formation' => 'Tattoo artist',
        ]);
    }
}
