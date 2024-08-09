<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('phases')->insert([
            ['id' => 1, 'name' => 'Procurement'],
            ['id' => 2, 'name' => 'Development'],
            ['id' => 3, 'name' => 'Implementation'],
            ['id' => 4, 'name' => 'Preparation'],
        ]);
    }
}
