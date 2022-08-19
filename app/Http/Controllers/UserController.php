<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showPreview()
    {
        $images = Image::orderBy('id', 'desc')
            ->get();

        return view('user.index')
            ->with('images', $images);
    }
}
