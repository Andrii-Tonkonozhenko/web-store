@extends('layout')

@section('title') Add new phone @endsection

@section('content')
    <h1>Add New Phone</h1>

    <form method="post" action="{{ route('smartphone.store') }}">
        @csrf
        <label for="brand_id">Brand</label>
        <select class="form-control" name="brand_id" id="brand_id">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{$brand->title}}</option>
            @endforeach
        </select><br>
        <label for="country_id">Country</label>
        <select class="form-control" name="country_id" id="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{$country->title}}</option>
            @endforeach
        </select><br>
        <label for="model">Model</label>
        <input type="text" name="model" id="model" placeholder="Write phone model" class="form-control"><br>
        <label for="operating_system_id">Operating System</label>
        <select class="form-control" name="operating_system_id" id="operating_system_id">
            @foreach($operatingSystems as $operatingSystem)
                <option value="{{ $operatingSystem->id }}">{{$operatingSystem->title}}</option>
            @endforeach
        </select><br>
        <label for="display_id">Display</label>
        <select class="form-control" name="display_id" id="display_id">
            @foreach($displays as $display)
                <option value="{{ $display->id }}">
                    Screen: ({{$display->material}} {{$display->display_height}}x{{$display->display_width}}
                    {{$display->diagonal}} ghz {{$display->ghz}})
                </option>
            @endforeach
        </select><br>
        <label for="processor_id">Processor</label>
        <select class="form-control" name="processor_id" id="processor_id">
            @foreach($processors as $processor)
                <option value="{{ $processor->id }}">{{$processor->title}} ({{$processor->core_amount}} ghz {{$processor->ghz}})</option>
            @endforeach
        </select><br>
        <label for="front_camera_id">Front Camera</label>
        <select class="form-control" name="front_camera_id" id="front_camera_id">
            @foreach($frontCameras as $frontCamera)
                <option value="{{ $frontCamera->id }}">{{$frontCamera->megapixels}}</option>
            @endforeach
        </select><br>
        <label for="main_camera_id">Main Camera</label>
        <select class="form-control" name="main_camera_id" id="main_camera_id">
            @foreach($mainCameras as $mainCamera)
                <option value="{{ $mainCamera->id }}">{{$mainCamera->megapixels}}</option>
            @endforeach
        </select><br>
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" placeholder="Write phone description"></textarea><br>
        <button type="submit" class="btn btn-success">To send</button><br><br><br><br><br><br>
    </form>
@endsection
