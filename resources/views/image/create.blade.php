@extends('layout')

@section('title') Upload Image@endsection

@section('content')
    <div class="container">
        <form action="{{ route('image.store') }}" method="post">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add Image</h1>
                    </div>
                    <div class="row">
                        <label for="scr" class="col-md-4 col-form-label ">Image</label>
                        <input type="file" form="scr" class="form-control-file" id="scr" name="scr">
                    </div>
                    <div class="form-group row">
                        <label for="alt" class="col-md-4 col-form-label ">Alt</label>
                        <input id="alt" type="text" class="form-control" name="alt" autocomplete="alt" autofocus placeholder="Write alt">
                    </div>
                    <div class="row pt-3">
                        <button class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
