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
        Schema::create('invoice_rows', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->double('amount');

            //
            $table->smallInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices');

            //
            $table->smallInteger('material_id')->unsigned();
            $table->foreign('material_id')->references('id')->on('materials');

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
        Schema::dropIfExists('invoice_rows');
    }
};
