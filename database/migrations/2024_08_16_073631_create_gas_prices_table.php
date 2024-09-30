<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasPricesTable extends Migration
{
    public function up()
    {
        Schema::create('gas_prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('indane_price', 10, 2); // Adjust precision and scale as needed
            $table->decimal('bharat_price', 10, 2);
            $table->decimal('hp_price', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gas_prices');
    }
}

