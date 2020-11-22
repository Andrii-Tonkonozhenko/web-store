<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests\StoreSmartphoneVariantRequest;
use App\Smartphone;
use App\SmartphoneVariant;
use Illuminate\Http\Request;

class SmartphoneVariantController extends Controller
{
    public function create()
    {
        $smartphones = Smartphone::all();
        $colors = Color::all();

        return view('smartphoneVariant.create', compact('smartphones', 'colors'));
    }

    public function store(StoreSmartphoneVariantRequest $request)
    {
        SmartphoneVariant::create($request->all());

        return redirect('/');
    }
}
