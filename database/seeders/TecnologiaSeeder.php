<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('tecnologie')->insert([
        ['nome' => 'HTML'],
        ['nome' => 'CSS'],
        ['nome' => 'JavaScript'],
        ['nome' => 'PHP'],
        ['nome' => 'SQL'],
        ['nome' => 'MySQL'],
        ['nome' => 'Laravel'],
        ['nome' => 'Vue.js'],
        ['nome' => 'React'],
        ['nome' => 'Node.js']
    ]);
}
}
