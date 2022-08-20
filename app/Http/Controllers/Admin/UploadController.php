<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showUpload()
    {
        return view('admin.upload');
    }

    public function uploadImage(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required'
        ]);

        $path = $request->file('image')->store('img','public');
        Image::create([
           'img_path' => $path,
        ]);

        return back();
    }
}
