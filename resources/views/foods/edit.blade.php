@extends('layouts.app')
@section('content')
    <h1>Update a food</h1>
    <form action="/foods/{{ $food->id }}" class="w-50 mx-5" method="POST">
        @csrf
        @method('PUT')
        <input type="text" class="form-control mb-2" name="name" placeholder="Enter food's name" value="{{$food->name}}">
        <input type="text" class="form-control mb-2" name="desc" placeholder="Enter food's description" value="{{$food->desc}}">
        <input type="number" class="form-control mb-2" name="count" placeholder="Enter food's count" value="{{$food->count}}">
        <button class="btn btn-success" type="submit">
            Update
        </button>
    </form>
@endsection