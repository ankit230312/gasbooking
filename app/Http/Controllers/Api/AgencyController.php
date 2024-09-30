<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        return Agency::all();
    }

    public function store(Request $request)
    {
        $agency = Agency::create($request->all());
        return response()->json($agency, 201);
    }

    public function show($id)
    {
        return Agency::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->update($request->all());
        return response()->json($agency, 200);
    }

    public function destroy($id)
    {
        Agency::destroy($id);
        return response()->json(null, 204);
    }
}
