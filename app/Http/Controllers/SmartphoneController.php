<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Country;
use App\Display;
use App\FrontCamera;
use App\Http\Requests\StoreSmartphoneRequest;
use App\MainCamera;
use App\OperatingSystem;
use App\Processor;
use App\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function create()
    {
        $brands = Brand::all();
        $countries = Country::all();
        $operatingSystems = OperatingSystem::all();
        $displays = Display::all();
        $frontCameras = FrontCamera::all();
        $mainCameras = MainCamera::all();
        $processors = Processor::all();

        return view('smartphone.create', compact('brands','countries','operatingSystems','displays','frontCameras','mainCameras','processors'));
    }

    public function store(StoreSmartphoneRequest $request)
    {
        Smartphone::create($request->all());

        return redirect('/');
    }
}
