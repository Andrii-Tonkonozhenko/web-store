@extends('layout')

@section('title') {{ $smartphoneVariant->viewTitle }} @endsection

@section('content')
    <div class="container">

        <div class="row mb-2 test">
            <div>
                <h1>{{ $smartphoneVariant->title }}</h1>
            </div>
        </div>

        <div class="row">
            <div class="img-size">
                <ul>
                    @foreach($images as $image)
                        @if($image->type == 'main')
                            <li class="li-image">
                                <a href="#">
                                    <img class="side-image rounded d-block mb-4 mx-auto" src="/storage/images/{{ $image->image->src }}"  alt="">
                                </a>
                            </li>
                        @else
                            <li class="li-image">
                                <a href="#">
                                    <img class="side-image rounded d-block mb-4 mx-auto" src="/storage/images/{{ $image->image->src }}"  alt="">
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="сol-sm-2 mb-3 ml-3">
                <img class="rounded mx-auto d-block img-show-main" src="/storage/images/{{ $smartphoneVariant->image }}" alt="">
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
                    <h4>{{ $smartphoneVariant->smartphone->description }}</h4>
                </div>

                <div class="mt-3 dropdown show">
                    <a class="btn btn-secondary dropdown-toggle h4" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Other {{ $smartphoneVariant->smartphone->brand->title }} {{ $smartphoneVariant->smartphone->model }} Variants
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($otherSmartphoneVariants as $otherSmartphoneVariant)
                            <a class="dropdown-item" href="{{ route('smartphoneVariant.show', ['smartphoneVariant' => $otherSmartphoneVariant->id]) }}">
                                {{ $otherSmartphoneVariant->otherVariants }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5 mt-3 ml-4">
            <div class="mt-3 border col-sm-5 ml-5">
                <span>Screen {{ $smartphoneVariant->display }} /</span>
                <span> {{ $smartphoneVariant->processor }} /</span>
                <span>Main camera: {{ $smartphoneVariant->maincamera }}Mp, Front camera: {{ $smartphoneVariant->frontcamera }} Mp/ </span>
                <span>RAM {{ $smartphoneVariant->ram }}/{{ $smartphoneVariant->hardware_memory }} Gb + microSD (up to 256 GB) / 4G / LTE / GPS /</span>
                <span>{{ $smartphoneVariant->operatingsystem }} / {{ $smartphoneVariant->battery }} mAh</span>
            </div>
        </div>
    </div>
@endsection
