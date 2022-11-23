<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('files')->insert([
            'url' => 'resources/images/onroute.jpg',
            'invoice_id' => 1,
            'file_type_id' => 1
        ]);

        DB::table('files')->insert([
            'url' => 'resources/images/package.jpg',
            'invoice_id' => 1,
            'file_type_id' => 2
        ]);
    }
}