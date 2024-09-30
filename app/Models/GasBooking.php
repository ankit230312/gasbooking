<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GasBooking extends Model
{
    protected $table = 'gasbooking';

    protected $fillable = [
        'phone_number',
        'sms_button',
        'whatsapp_button',
        'online_portal_link',
        'complaint_button',
    ];
}

