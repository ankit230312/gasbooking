<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GasPrice;
use App\Models\GasBooking;

use Illuminate\Http\JsonResponse;

class GasPriceController extends Controller
{
    /**
     * Get the gas price data.
     *
     * @return JsonResponse
     */
    public function get(): JsonResponse
    {
        $gasPrice = GasPrice::first();

        if (!$gasPrice) {
            $gasPrice = new GasPrice();
            $gasPrice->indane_price = null;
            $gasPrice->bharat_price = null;
            $gasPrice->hp_price = null;
        }

        return response()->json($gasPrice);
    }

    public function getbooking(): JsonResponse
    {
        $gasBooking = GasBooking::first();

        if (!$gasBooking) {
            $gasBooking = new GasBooking();
            $gasBooking->indane_price = null;
            $gasBooking->bharat_price = null;
            $gasBooking->hp_price = null;
        }

        return response()->json($gasBooking);
    }
}

