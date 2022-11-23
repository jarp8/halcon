<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Testing commit
        DB::table('clients')->insert([
            'name' => 'Usuario',
            'rfc' => 'XAX00X00X',
            'user_id' => '1'
        ]);
    }
}
