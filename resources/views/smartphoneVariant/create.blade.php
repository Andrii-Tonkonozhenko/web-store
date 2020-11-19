@extends('layout')

@section('title')Create variant @endsection

@section('content')
    <div class="container">
        <form action="{{ route('smartphoneVariant.store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add New Phone Variant</h1>
                    </div>
                    <div class="form-group row">
                        <label for="smartphone_id" class="col-md-4 col-form-label ">Phone</label>
                        <select class="form-control" name="smartphone_id" id="smartphone_id">
                            @foreach($smartphones as $smartphone)
                                <option value="{{ $smartphone->id }}"> {{$smartphone->brand->title}} {{$smartphone->model}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="color_id" class="col-md-4 col-form-label ">Phone color</label>
                        <select class="form-control" name="color_id" id="color_id">
                            @foreach($colors as $color)
                                <option value="{{ $color->id }}">{{$color->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="ram" class="col-md-4 col-form-label ">Phone ram</label>
                        <input id="ram" type="text" class="form-control" name="ram" autocomplete="ram" autofocus placeholder="Write phone ram">
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label ">Phone price</label>
                        <input id="price" type="text" class="form-control" name="price" autocomplete="price" autofocus placeholder="Write phone price">
                    </div>
                    <div class="form-group row">
                        <label for="hardware_memory" class="col-md-4 col-form-label ">Phone hardware memory</label>
                        <input id="hardware_memory" type="text" class="form-control" name="hardware_memory" autocomplete="hardware_memory" autofocus placeholder="Write phone hardware memory">
                    </div>
                    <div class="form-group row">
                        <label for="battery" class="col-md-4 col-form-label ">Phone battery</label>
                        <input id="battery" type="text" class="form-control" name="battery" autocomplete="battery" autofocus placeholder="Write phone battery">
                    </div>
                    <div class="row pt-3">
                        <button class="btn btn-primary">Add New Phone Variant</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

