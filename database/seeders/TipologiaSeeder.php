<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipologie')->insert([
            ['nome' => 'Front-End Development'],
            ['nome' => 'Back-End Development'],
            ['nome' => 'FullStack Development'],
            ['nome' => 'Temp']
        ]);
    }
}
