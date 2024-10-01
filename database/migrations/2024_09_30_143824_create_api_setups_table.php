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
        Schema::create('api_setups', function (Blueprint $table) {
            $table->id();
            $table->string('api_key');
            $table->boolean('status')->default(0); // 0 = inactive, 1 = active
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_setups');
    }
};
