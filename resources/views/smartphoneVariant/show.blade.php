@extends('layout')

@section('title') Add new phone @endsection

@section('content')
    <div class="container">

        <div class="row mb-2 test">
            <div>
                <h1>Smartphone {{ $smartphoneVariant->smartphone->brand->title}} {{$smartphoneVariant->smartphone->model}}
                               {{ $smartphoneVariant->ram}}/{{ $smartphoneVariant->hardware_memory}}Gb
                               {{ $smartphoneVariant->color->title}}
                </h1>
            </div>
        </div>

        <div class="row">

            <div class="img-size">
                <ul>
                    <li class="li-image">
                        <a href="#"><img class="rounded d-block mb-4" src="{{asset('img/realme.jpg')}}"  alt="" style="height: 75px"></a>
                    </li>
                    <li class="li-image">
                        <a href="#"><img class="rounded d-block mb-4" src="{{asset('img/realme_front.jpg')}}"  alt="" style="height: 75px"></a>
                    </li>
                    <li class="li-image">
                        <a href="#"><img class="rounded d-block mb-4" src="{{asset('img/realme_back.jpg')}}"  alt="" style="height: 75px"></a>
                    </li>
                    <li class="li-image">
                        <a href="#"><img class="rounded d-block mb-4" src="{{asset('img/realme_side.jpg')}}"  alt="" style="height: 75px"></a>
                    </li>
                </ul>
            </div>

            <div class="сol-sm-2">
                <img class="rounded mx-auto d-block" src="{{asset('img/realme.jpg')}}"  alt="">
            </div>

            <div class="col-sm-5 ml-5 mt-5">

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

                <div class="mt-3 dropdown show">
                    <a class="btn btn-secondary dropdown-toggle h4" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other {{$smartphoneVariant->smartphone->brand->title}} {{$smartphoneVariant->smartphone->model}} Variants
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($otherSmartphoneVariants as $otherSmartphoneVariant)
                            <a class="dropdown-item" href="{{ route('smartphoneVariant.show', ['smartphoneVariant' => $otherSmartphoneVariant->id]) }}">
                                {{$smartphoneVariant->smartphone->brand->title}} {{$smartphoneVariant->smartphone->model}}
                                {{$otherSmartphoneVariant->ram}}/{{ $otherSmartphoneVariant->hardware_memory}}Gb
                                {{$otherSmartphoneVariant->battery}} mAh   {{$otherSmartphoneVariant->price}}$
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="mt-3 border col-sm-6">
                <p class="p-2">
                    Screen ({{ $smartphoneVariant->smartphone->display->diagonal}}, {{$smartphoneVariant->smartphone->display->material}},
                    {{ $smartphoneVariant->smartphone->display->display_height}}x{{ $smartphoneVariant->smartphone->display->display_width}}/
                    {{ $smartphoneVariant->smartphone->processor->title}} ({{ $smartphoneVariant->smartphone->processor->ghz}} Ghz)/
                    Main camera: {{ $smartphoneVariant->smartphone->maincamera->megapixels}}Mp, Front camera: {{ $smartphoneVariant->smartphone->frontcamera->megapixels}}Mp/
                    RAM {{ $smartphoneVariant->ram}}/{{ $smartphoneVariant->hardware_memory}} Gb + microSD (up to 256 GB) / 4G / LTE / GPS /
                    {{ $smartphoneVariant->smartphone->operatingsystem->title}} / {{ $smartphoneVariant->battery}} mAh
                </p>
            </div>
        </div>
    </div>
@endsection
