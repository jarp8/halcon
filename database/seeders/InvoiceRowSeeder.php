<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class InvoiceRowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoice_rows')->insert([
            'amount' => 1,
            'invoice_id' => 1,
            'material_id' => 1
        ]);

        DB::table('invoice_rows')->insert([
            'amount' => 1,
            'invoice_id' => 1,
            'material_id' => 3
        ]);

        DB::table('invoice_rows')->insert([
            'amount' => 1,
            'invoice_id' => 2,
            'material_id' => 1
        ]);
    }
}
