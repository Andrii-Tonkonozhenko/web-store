@extends('layout')

@section('title')Smartphones @endsection

@section('content')
    <h1>Smartphones</h1>
    <a href="{{ route('smartphone.create') }}" class="btn btn-success">Add phone</a>
    <a href="{{ route('smartphoneVariant.create') }}" class="btn btn-success">Add phone variant</a>
    <a href="{{ route('image.create') }}" class="btn btn-info">Upload image</a>
@endsection


