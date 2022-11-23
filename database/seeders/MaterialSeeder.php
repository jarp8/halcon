<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->insert([
            'name' => 'Cemento',
            'cost' => 100,
            'price' => 150,
            'amount' => 5,
        ]);

        DB::table('materials')->insert([
            'name' => 'Madera',
            'cost' => 150,
            'price' => 200,
            'amount' => 5,
        ]);
        
        DB::table('materials')->insert([
            'name' => 'Pegamento Industrial',
            'cost' => 100,
            'price' => 150,
            'amount' => 5,
        ]);
    }
}
