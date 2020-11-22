@extends('layout')

@section('title')  Amantis Technology @endsection

@section('content')
    <a href="{{ route('smartphone.create') }}" class="btn btn-success">Add new phone</a>
    <a href="{{ route('smartphoneVariant.create') }}" class="btn btn-success">Add new variant</a>
@endsection
