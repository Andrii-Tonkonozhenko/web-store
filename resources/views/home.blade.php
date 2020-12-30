@extends('layout')

@section('title') Amantis Technology @endsection

@section('content')

    <div class="row">

        <div class="col-lg-2">
            <div class="list-group ml-4">
                <ul class="list-unstyled components mb-5">
                    <li class="active h4 ">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">Brand</a>
                        <ul class="collapse list-unstyled text-dark" id="homeSubmenu">
                            <li><a href="#" class="h6 text-dark form-check-label">test</a></li>
                        </ul>
                    </li>
                    <li class="active h4 ">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">Display</a>
                        <ul class="collapse list-unstyled text-dark" id="homeSubmenu">
                            <li><a href="#" class="h6 text-dark">test</a></li>
                        </ul>
                    </li>
                    <li class="active h4 ">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">Processor</a>
                        <ul class="collapse list-unstyled text-dark" id="homeSubmenu">
                            <li><a href="#" class="h6 text-dark">test</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-9">

            <div class="row">
            @foreach($smartphoneVariants as $smartphoneVariant)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('smartphoneVariant.show', ['smartphoneVariant' => $smartphoneVariant->id]) }}">
                            <img class="rounded mx-auto d-block img-home" src="/storage/images/{{ $smartphoneVariant->image }}"  alt="{{ $smartphoneVariant->title }}">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a class="text-black-50" href="{{ route('smartphoneVariant.show', ['smartphoneVariant' => $smartphoneVariant->id]) }}">
                                    {{ $smartphoneVariant->title }}
                                </a>
                            </h4>
                            <div>
                                <h1>${{$smartphoneVariant->price}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
