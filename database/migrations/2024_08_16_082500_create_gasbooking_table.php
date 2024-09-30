<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGasbookingTable extends Migration
{
    public function up()
    {
        Schema::create('gasbooking', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->nullable();
            $table->string('sms_button')->nullable();
            $table->string('whatsapp_button')->nullable();
            $table->string('online_portal_link')->nullable();
            $table->string('complaint_button')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gasbooking');
    }
}
