@extends('layouts.app')

@section('content')
<h1>PageController.about page</h1>  
{{
    $x = 1;
}}
@if ($x > 2)
    <h3>x is greater than 2</h3>
@elseif($x < 10)
    <h3>x is less than 2</h3>
@endif 
{{-- @unless (empty($name))
    <h3>Name is not empty</h3>
@endunless  --}}
{{-- @empty($age)
    <h3>Age is empty</h3>
@endempty --}}
@endsection

    
