<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests\StoreSmartphoneRequest;
use App\Http\Requests\StoreSmartphoneVariantRequest;
use App\Smartphone;
use App\SmartphoneVariant;
use Illuminate\Http\Request;

class SmartphoneVariantController extends Controller
{
    public function create()
    {
        return view('smartphoneVariant.create', ['smartphones' => Smartphone::all(), 'colors' => Color::all()]);
    }

    public function store(StoreSmartphoneVariantRequest $request)
    {
        SmartphoneVariant::create($request->all());

        return redirect('smartphone');
    }
}
