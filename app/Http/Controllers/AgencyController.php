<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;

class AgencyController extends Controller
{
    public function index()
    {
        return view('admin.agency');
    }

    public function store(Request $request)
    {
        $request->validate([
            'agency_name' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'agency_number' => 'required|string|max:255',
        ]);

        // Insert agency data into the database
        Agency::create([
            'agency_name' => $request->agency_name,
            'state' => $request->state,
            'district' => $request->district,
            'agency_number' => $request->agency_number,
        ]);

        return redirect()->route('agency')->with('success', 'Agency information saved successfully!');
    }

    public function list()
    {
        $agencies = Agency::all(); // Fetch all agencies

        return view('admin.agencyList', compact('agencies'));
    }


    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        return view('admin.agency', compact('agency')); // Pass the agency for editing
    }

    public function update(Request $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->update($request->all());
        return redirect()->route('agency.list')->with('success', 'Agency updated successfully.');
    }
    public function destroy($id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.list')->with('success', 'Agency deleted successfully.');
    }
}
