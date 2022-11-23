<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class InvoiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice_statuses')->insert([
            'name' => 'En proceso'
        ]);

        DB::table('invoice_statuses')->insert([
            'name' => 'En camino'
        ]);

        DB::table('invoice_statuses')->insert([
            'name' => 'Entregado'
        ]);
    }
}
