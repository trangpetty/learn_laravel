@extends('layouts.app')
@section('content')
    <h1>Show detail food</h1>
    <h3>Name: {{ $food->name }}</h3>
    <img src="{{ asset('images/'.$food->image_path) }}" alt="" class="w-50">
    <h3>Count: {{ $food->count }}</h3>
    <h3>Description: {{ $food->desc }}</h3>
    <h3>CategoryId: {{ $food->categories_id }}</h3>
    <h3>Category's name: {{ $food->category->name }}</h3>
@endsection