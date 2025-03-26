<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id(); // Equivalent to int(11) NOT NULL AUTO_INCREMENT (Laravel uses BIGINT for IDs by default)
            $table->boolean('weekly_sms')->nullable(); // Equivalent to tinyint(1) DEFAULT NULL
            $table->tinyInteger('monthly_sms')->nullable(); // Equivalent to tinyint(4) DEFAULT NULL
            $table->timestamps(); // created_at & updated_at as datetime NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
