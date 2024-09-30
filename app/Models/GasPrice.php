<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GasPrice extends Model
{
    use HasFactory;

    protected $fillable = ['indane_price', 'bharat_price', 'hp_price'];
}

