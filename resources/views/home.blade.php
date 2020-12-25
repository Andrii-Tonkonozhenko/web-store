@extends('layout')

@section('title')  Amantis Technology @endsection

@section('content')

    <div class="row">

        <div class="col-lg-2">
            <div class="list-group ml-4">
                <ul class="list-unstyled components mb-5">
                    <li class="active h4 ">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-dark">Brand</a>
                        <ul class="collapse list-unstyled text-dark " id="homeSubmenu">
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
                <div class="col-lg-3 col-md-6 mb-4" >
                    <div class="card h-100">
                        <a href="{{ route('smartphoneVariant.show', ['smartphoneVariant' => $smartphoneVariant->id]) }}">
                            <img class="rounded mx-auto d-block" src="{{asset('img/test.jpg')}}"  alt="">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('smartphoneVariant.show', ['smartphoneVariant' => $smartphoneVariant->id]) }}">
                                    {{$smartphoneVariant->smartphone->brand->title}} {{$smartphoneVariant->smartphone->model}}
                                </a>
                            </h4>
                            <h5>${{$smartphoneVariant->price}}</h5>
                            <p class="card-text">{{$smartphoneVariant->smartphone->brand->title}} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
