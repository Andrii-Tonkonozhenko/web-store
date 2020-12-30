<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests\StoreSmartphoneVariantRequest;
use App\Smartphone;
use App\SmartphoneVariant;
use App\SmartphoneVariantImageMap;

class SmartphoneVariantController extends Controller
{
    public function show(SmartphoneVariant $smartphoneVariant)
    {
        $otherSmartphoneVariants = SmartphoneVariant::where('smartphone_id', $smartphoneVariant->smartphone->id)->get();

        $images = SmartphoneVariantImageMap::where('smartphone_variant_id', $smartphoneVariant->smartphone->id)->get();

        return view('smartphoneVariant.show', compact( 'smartphoneVariant', 'otherSmartphoneVariants' , "images"));
    }

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
