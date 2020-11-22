@extends('layout')

@section('title') Add new variant @endsection

@section('content')
    <h1>Add New Phone</h1>

    <form method="post" action="{{ route('smartphoneVariant.store') }}">
        @csrf
        <label for="smartphone_id">Smartphone</label>
        <select class="form-control" name="smartphone_id" id="smartphone_id">
            @foreach($smartphones as $smartphone)
                <option value="{{ $smartphone->id }}">{{$smartphone->brand->title}} {{$smartphone->model}}</option>
            @endforeach
        </select><br>
        <label for="color_id">Color</label>
        <select class="form-control" name="color_id" id="color_id">
            @foreach($colors as $color)
                <option value="{{ $color->id }}">{{$color->title}}</option>
            @endforeach
        </select><br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" placeholder="Write phone price" class="form-control"><br>

        <label for="ram">Price</label>
        <input type="text" name="ram" id="ram" placeholder="Write phone ram" class="form-control"><br>

        <label for="hardware_memory">Hardware memory</label>
        <input type="text" name="hardware_memory" id="hardware_memory" placeholder="Write phone hardware memory" class="form-control"><br>

        <label for="battery">Battery</label>
        <input type="text" name="battery" id="battery" placeholder="Write phone battery" class="form-control"><br>

        <button type="submit" class="btn btn-success">To send</button><br><br><br><br><br><br>
    </form>
@endsection
