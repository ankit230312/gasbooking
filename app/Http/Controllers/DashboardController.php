<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GasPrice;
use App\Models\GasBooking  ;
use App\Models\Content;


class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('admin.layout.app');
    }

    public function showRate()
    {
        $gasPrice = GasPrice::first();

        if (!$gasPrice) {
            $gasPrice = new GasPrice();
            $gasPrice->indane_price = null;
            $gasPrice->bharat_price = null;
            $gasPrice->hp_price = null;
        }
        return view('admin.rate', compact('gasPrice'));
    }

    // This method is now properly named to match the route
    public function editGasPrice()
    {
        $gasPrice = GasPrice::first();

        if (!$gasPrice) {
            $gasPrice = new GasPrice();
            $gasPrice->indane_price = null;
            $gasPrice->bharat_price = null;
            $gasPrice->hp_price = null;
        }

        return view('admin.rate', compact('gasPrice'));
    }

    // This method is now properly named to match the route
    public function saveGasPrice(Request $request)
    {
        $request->validate([
            'indane_price' => 'required|numeric|min:0|max:99999999.99',
            'bharat_price' => 'required|numeric|min:0|max:99999999.99',
            'hp_price' => 'required|numeric|min:0|max:99999999.99',
        ]);

        $gasPrice = GasPrice::first();

        if ($gasPrice) {
            $gasPrice->update($request->all());
        } else {
            GasPrice::create($request->all());
        }

        return redirect()->route('gasprice.edit')->with('success', 'Prices saved successfully');
    }


    public function showGasBookingForm()
    {
        $gasBooking = GasBooking::first();

        if (!$gasBooking) {
            $gasBooking = new GasBooking();
        }

        return view('admin.gasbooking', compact('gasBooking'));
    }

    // Save or update the data
    public function saveGasBooking(Request $request)
    {
        $request->validate([
            'phone_number' => 'nullable|string',
            'sms_button' => 'nullable|string',
            'whatsapp_button' => 'nullable|string',
            'online_portal_link' => 'nullable|string',
            'complaint_button' => 'nullable|string',
        ]);

        $gasBooking = GasBooking::first();

        if ($gasBooking) {
            $gasBooking->update($request->all());
        } else {
            GasBooking::create($request->all());
        }

        return redirect()->route('gasbooking.form')->with('success', 'Data saved successfully');
    }


    public function content(){

        $contents = Content::all();
        $yojna = Content::where('type', 'Yojna')->first();
        $safety = Content::where('type', 'Safty')->first();
        return view('admin.content', compact('contents', 'yojna', 'safety'));
    }

    public function contentstore(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $content = Content::updateOrCreate(
            ['type' => $request->type], // Check by type
            ['description' => $request->description] // Update description
        );

        return redirect()->back()->with('success', 'Content saved successfully.');
    }

}
