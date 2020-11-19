@extends('layout')

@section('title')Create @endsection

@section('content')
    <div class="container">
        <form action="{{ route('smartphone.store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">

                    <div class="row">
                        <h1>Add New Phone</h1>
                    </div>
                    <div class="form-group row">
                        <label for="brand_id" class="col-md-4 col-form-label ">Phone Brand</label>
                        <select class="form-control" name="brand_id" id="brand_id">
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{$brand->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="country_id" class="col-md-4 col-form-label">Producing country</label>
                        <select class="form-control" name="country_id" id="country_id">
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{$country->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="operating_system_id" class="col-md-4 col-form-label">Phone operating system</label>
                        <select class="form-control" name="operating_system_id" id="operating_system_id">
                            @foreach($operatingSystems as $operatingSystem)
                                <option value="{{ $operatingSystem->id }}">{{$operatingSystem->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="model" class="col-md-4 col-form-label ">Phone model</label>
                        <input id="model" type="text" class="form-control" name="model" autocomplete="model" autofocus placeholder="Write phone model">
                    </div>
                    <div class="form-group row">
                        <label for="display_id" class="col-md-4 col-form-label">Screen</label>
                        <select class="form-control" name="display_id" id="display_id">
                            @foreach($displays as $display)
                                <option value="{{ $display->id }}">
                                    Screen: ({{$display->diagonal}} {{$display->material}}
                                    {{$display->display_height}}x{{$display->display_width}} {{$display->ghz}})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="processor_id" class="col-md-4 col-form-label">Phone processor</label>
                        <select class="form-control" name="processor_id" id="processor_id">
                            @foreach($processors as $processor)
                                <option value="{{ $processor->id }}">
                                    {{$processor->title}} ({{$processor->core_amount}} x ghz {{$processor->ghz}})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="main_camera_id" class="col-md-4 col-form-label">Phone main camera</label>
                        <select class="form-control" name="main_camera_id" id="main_camera_id">
                            @foreach($mainCameras as $mainCamera)
                                <option value="{{ $mainCamera->id }}">Main Camera: {{$mainCamera->megapixels}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="front_camera_id" class="col-md-4 col-form-label">Phone front camera</label>
                        <select class="form-control" name="front_camera_id" id="front_camera_id">
                            @foreach($frontCameras as $frontCamera)
                                <option value="{{ $frontCamera->id }}">Front Camera: {{$frontCamera->megapixels}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Phone description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Write phone description"></textarea>
                    </div>
                    <div class="row pt-3">
                        <button class="btn btn-primary">Add New Phone</button>
                    </div><br><br><br><br>
                </div>
            </div>
        </form>
    </div>
@endsection

