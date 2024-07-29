<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sectors')->insert([
            ['id' => 1, 'name' => 'Technology'],
            ['id' => 2, 'name' => 'Healthcare'],
            ['id' => 3, 'name' => 'Finance'],
        ]);
    }
}
