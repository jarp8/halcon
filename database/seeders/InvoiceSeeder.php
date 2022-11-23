<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'total' => 300,
            'delivery_address' => 'San diego 314 Lomas del Real',
            'date' => '2022-11-23',
            'client_id' => 1,
            'invoice_status_id' => 3
        ]);
    }
}
