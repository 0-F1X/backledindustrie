<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::select('id', 'name', 'description')->get();
        return view('home', ['images' => $images]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ]);

        $imagePath = $request->file('image')->store('public/images');

        $image = new Image();
        $image->name = $request->image_name;
        $image->description = $request->description;
        $image->path = str_replace('public/', '', $imagePath);
        $image->save();

        // Retourner une réponse JSON indiquant le succès
        return response()->json(['success' => true]);
    }
}
