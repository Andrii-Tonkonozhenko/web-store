<?php

namespace App\Http\Controllers;

use App\Smartphone;
use App\SmartphoneVariant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', ['smartphoneVariants' => SmartphoneVariant::all(), 'smartphones' => Smartphone::all()]);
    }
}
