<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->double('total', 12, 2);
            $table->string('delivery_address');
            $table->date('date');

            //
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');

            //
            $table->smallInteger('invoice_status_id')->unsigned();
            $table->foreign('invoice_status_id')->references('id')->on('invoice_statuses');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
