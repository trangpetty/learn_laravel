@extends('layouts.app')
@section('content')
    <h1>This is Foods Page</h1>
    <a href="foods/create" class="btn btn-success mb-3" role="button">Add</a>
    @foreach ($foods as $food)
    <li class="list-group-item d-flex justify-content-between align-items-center w-50 ms-3">
        <div class="ms-2 me-auto">
            <div class="fw-bold">
                <a href="/foods/{{ $food->id }}">
                    {{ $food->name }}                
                </a>
            </div>
            {{ $food->desc }}
            <span class="badge bg-success rounded-pill">{{ $food->categories_id }}</span>
        </div>
        <span class="badge bg-danger rounded-pill">
            {{ $food->count }}
        </span>
        <a href="foods/{{ $food->id }}/edit" class="btn btn-info ms-2">Edit</a>
        <form action="/foods/{{ $food->id }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="ms-2 btn btn-danger">Delete</button>
        </form>
    </li>
    @endforeach
@endsection