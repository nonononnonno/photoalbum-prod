<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function showPreview()
    {
        $images = Image::orderBy('id', 'desc')
            ->get();

        return view('admin.preview')
            ->with('images', $images);
    }
}
