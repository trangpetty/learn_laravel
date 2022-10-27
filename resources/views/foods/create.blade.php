@extends('layouts.app')
@section('content')
    <h1>This is Create Foods Page</h1>
    <form action="/foods" class="w-50 mx-5" method="POST"
        enctype="multipart/form-data">
        @csrf
        <input type="file" class="form-control mb-2" name="image_path" placeholder="Enter food's image">
        <input type="text" class="form-control mb-2" name="name" placeholder="Enter food's name">
        <input type="text" class="form-control mb-2" name="desc" placeholder="Enter food's description">
        <input type="number" class="form-control mb-2" name="count" placeholder="Enter food's count">
        
        <div>
            <label>Choose a categories:</label>
            <select name="category_id">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>  
                @endforeach
            </select>
        </div>
        {{-- <input type="text" class="form-control mb-2" name="name-cate" placeholder="Enter food's name">
        <input type="text" class="form-control mb-2" name="desc-cate" placeholder="Enter food's description"> --}}
        <button class="btn btn-success" type="submit">
            Submit
        </button>
        
    </form>
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">
                    {{ $error }}
                </p>
            @endforeach
        </div>
    @endif
@endsection