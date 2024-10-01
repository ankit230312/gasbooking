<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiSetup;



class ApiControllerStatus extends Controller
{


    public function index()
    {
        // Fetch the API setup
        $apiSetup = ApiSetup::find(1);
        return view('admin.apisetup', compact('apiSetup'));
    }

    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'api_setup' => 'required|string',
            'phoneToggle' => 'sometimes|boolean',
        ]);

        // Create or update the API setup record
        ApiSetup::updateOrCreate(
            ['id' => 1],  // Assuming you have a single API setup to manage
            ['api_key' => $request->input('api_setup'), 'status' => $request->has('phoneToggle')]
        );

        return redirect()->back()->with('success', 'API setup updated successfully');
    }


}
