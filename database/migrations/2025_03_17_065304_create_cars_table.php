<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('customer_id')->constrained()->onDelete('cascade'); 
            $table->string('registration_number'); 
            $table->string('make'); 
            $table->year('year_of_manufacture'); 
            $table->json('data'); 
            $table->date('mot_expiry_date')->nullable(); 
            $table->string('mileage')->nullable(); 
            $table->softDeletes(); 
            $table->timestamps(); 

            // Indexes (if necessary)
            $table->index('customer_id');
            $table->index('registration_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}

