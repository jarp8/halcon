<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'example@example.com'
        ]);

        DB::table('users')->insert([
            'name' => 'Retro',
            'email' => 'retro@example.com'
        ]);
    }
}
