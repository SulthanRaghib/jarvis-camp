<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventRegisterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('event_registers')->insert([
            [
                'event_id' => 1,
                'user_id' => 1,
                'tanggal_daftar' => now(),
            ],
            [
                'event_id' => 2,
                'user_id' => 2,
                'tanggal_daftar' => now(),
            ],
            [
                'event_id' => 3,
                'user_id' => 3,
                'tanggal_daftar' => now(),
            ]
        ]);
    }
}
