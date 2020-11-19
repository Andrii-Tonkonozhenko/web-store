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
    public function index()
    {
        return view('smartphone.index', ['smartphones' => Smartphone::all()]);
    }

    public function show()
    {
        //
    }

    public function create()
    {
        $operatingSystems = OperatingSystem::all();
        $displays = Display::all();
        $frontCameras = FrontCamera::all();
        $mainCameras = MainCamera::all();
        $processors = Processor::all();
        $brands = Brand::all();
        $countries = Country::all();

        return view('smartphone.create', compact('operatingSystems','frontCameras','mainCameras','displays','processors','brands', 'countries'));
    }

    public function store(StoreSmartphoneRequest $request)
    {
        Smartphone::create($request->all());

        return redirect('smartphone');
    }
}
