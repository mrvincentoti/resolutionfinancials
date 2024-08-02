<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lgas')->insert([
            ['id' => 1, 'name' => 'Akwanga'],
            ['id' => 2, 'name' => 'Awe'],
            ['id' => 3, 'name' => 'Doma'],
            ['id' => 4, 'name' => 'Karu'],
            ['id' => 5, 'name' => 'Keana'],
            ['id' => 6, 'name' => 'Keffi'],
            ['id' => 7, 'name' => 'Kokona'],
            ['id' => 8, 'name' => 'Lafia'],
            ['id' => 9, 'name' => 'Nasarawa'],
            ['id' => 10, 'name' => 'Nasarawa Eggon'],
            ['id' => 11, 'name' => 'Obi'],
            ['id' => 12, 'name' => 'Toto'],
            ['id' => 13, 'name' => 'Wamba'],
        ]);
    }
}
