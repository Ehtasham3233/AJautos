<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_invoices', function (Blueprint $table) {
            $table->id(); // Equivalent to bigIncrements('id')
            
            // Foreign Key Reference to 'cars' Table
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');

            // JSON Field with Validity Check
            $table->json('details')->nullable(); // JSON with NULL allowed

            // Financial Fields
            $table->float('amount', 20, 2)->default(0.00); // Default 0.00 to avoid NULL issues
            $table->tinyInteger('payment_type')->comment('1=Cash, 2=Credit, 3=Bank Transfer'); // Add meaning to values

            // Soft Deletes & Timestamps
            $table->softDeletes();
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
        Schema::dropIfExists('sale_invoices');
    }
}
