@extends('layout')

@section('title')AmantisTechnology @endsection

@section('content')
    <div>
        <h1>Amantis Technology</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    </div>
    <div class="album py-5 bg-dark">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ route('smartphone.index') }}"><img class="card-img-top" src="storage/category/smart.png" alt="Card image cap"></a>
                        <div class="card-body bg-light">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#"><img class="card-img-top" src="storage/category/computer.jpg" alt="Card image cap"></a>
                        <div class="card-body bg-light">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="#"><img class="card-img-top" src="storage/category/laptop.png" alt="Card image cap"></a>
                        <div class="card-body bg-light">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
@endsection
