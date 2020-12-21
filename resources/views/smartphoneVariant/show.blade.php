@extends('layout')

@section('title') Add new phone @endsection

@section('content')
    <div class="container">

        <div class="row mb-2">
            <div>
                <h1>{{ $smartphoneVariant->viewTitle }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="сol-sm-3">
                <img class="rounded mx-auto d-block" src="{{asset('img/realme.jpg')}}"  alt="">
            </div>

            <div class="col-sm-6 ml-5 mt-5">
                <div class="mt-3 mb-3">
                    <a class="btn btn-info" href="#">Add to Cart</a>
                </div>
                <div class="border">
                    <h2 class="mt-2">Price: {{ $smartphoneVariant->price}}$</h2>
                </div>

                <div class="mt-3 border">
                    <h3 class="mt-2">Description:</h3>
                    <h4>{{$smartphoneVariant->smartphone->description}}</h4>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="mt-3 border col-sm-5">
                <span>Screen {{ $smartphoneVariant->display }} /</span>
                <span> {{ $smartphoneVariant->smartphone->processor->title}} ({{ $smartphoneVariant->smartphone->processor->ghz}} Ghz) /</span>
                <span>Main camera: {{ $smartphoneVariant->maincamera }}Mp, Front camera: {{ $smartphoneVariant->frontcamera }} Mp/ </span>
                <span>RAM {{ $smartphoneVariant->ram}}/{{ $smartphoneVariant->hardware_memory}} Gb + microSD (up to 256 GB) / 4G / LTE / GPS /</span>
                <span>{{ $smartphoneVariant->smartphone->operatingsystem->title}} / {{ $smartphoneVariant->battery}} mAh</span>

            </div>
        </div>
    </div>
@endsection
