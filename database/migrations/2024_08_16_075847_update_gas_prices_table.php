<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('gas_prices', function (Blueprint $table) {
        $table->decimal('indane_price', 15, 2)->change(); // Adjust precision and scale
        $table->decimal('bharat_price', 15, 2)->change();
        $table->decimal('hp_price', 15, 2)->change();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
