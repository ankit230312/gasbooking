<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GasPrice;

class GasPriceController extends Controller
{
    public function edit()
    {
        $gasPrice = GasPrice::first();

        if (!$gasPrice) {
            $gasPrice = new GasPrice();
        }

        return view('admin.rate', compact('gasPrice'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'indane_price' => 'required|numeric',
            'bharat_price' => 'required|numeric',
            'hp_price' => 'required|numeric',
        ]);

        $gasPrice = GasPrice::first();

        if ($gasPrice) {
            $gasPrice->update($request->all());
        } else {
            GasPrice::create($request->all());
        }

        return redirect()->route('gasprice.edit')->with('success', 'Prices saved successfully');
    }
}

