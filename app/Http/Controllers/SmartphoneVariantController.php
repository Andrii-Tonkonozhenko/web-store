<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests\StoreSmartphoneVariantRequest;
use App\Smartphone;
use App\SmartphoneVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmartphoneVariantController extends Controller
{
    public function show(SmartphoneVariant $smartphoneVariant)
    {
        $otherSmartphoneVariants = DB::table('smartphone_variants')->where('smartphone_id', $smartphoneVariant->smartphone->id)->get();

        return view('smartphoneVariant.show', compact( 'smartphoneVariant', 'otherSmartphoneVariants'));
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
