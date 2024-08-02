<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('announcement_types')->insert([
            ['id' => 1, 'name' => 'General'],
            ['id' => 2, 'name' => 'Project'],
        ]);
    }
}
