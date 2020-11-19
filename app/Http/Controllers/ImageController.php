<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('image.create');
    }

    public function store(Request $request)
    {
        $imageName = time(). '.' .$request->src->extension();
        $request->src->move(public_path('upload'), $imageName);

        $image = new Image();

        $image->src = $imageName;
        $image->alt = $request->alt;

        $image->save();

        return redirect('smartphone');
    }
}
