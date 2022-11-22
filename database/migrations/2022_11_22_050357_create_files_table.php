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
        Schema::create('files', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('url');

            //
            $table->smallInteger('invoice_id')->unsigned();
            $table->foreign('invoice_id')->references('id')->on('invoices');

            //
            $table->smallInteger('file_type_id')->unsigned();
            $table->foreign('file_type_id')->references('id')->on('file_types');

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
        Schema::dropIfExists('files');
    }
};
