<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        $yojna = Content::where('type', 'Yojna')->first();
        $safety = Content::where('type', 'Safty')->first();
        return view('admin.content', compact('contents', 'yojna', 'safety'));
    }

    public function store(Request $request)
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


