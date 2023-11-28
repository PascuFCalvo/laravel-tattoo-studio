<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_appointments')->insert([
            'title' => Str::random(10),
            'description' => Str::random(30),
            'tattoo_artist' => 1,
            'user_id' => 40,
            'type' => 'tattoo',
            'appointment_date' => '2021-06-01',
            'appointment_turn' => 'morning',

        ]);

        DB::table('_appointments')->insert([
            'title' => Str::random(10),
            'description' => Str::random(30),
            'tattoo_artist' => 1,
            'user_id' => 41,
            'type' => 'tattoo',
            'appointment_date' => '2021-06-01',
            'appointment_turn' => 'morning',

        ]);

        DB::table('_appointments')->insert([
            'title' => Str::random(10),
            'description' => Str::random(30),
            'tattoo_artist' => 1,
            'user_id' => 42,
            'type' => 'tattoo',
            'appointment_date' => '2021-06-01',
            'appointment_turn' => 'morning',

        ]);
    }
}
