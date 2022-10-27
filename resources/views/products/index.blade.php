<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>Index function</h1>
    <p>{{ $title }}</p>
    <h3>{{ $name }}</h3>
    @foreach ($myphone as $item)
        <h3>{{ $item }}</h3>
    @endforeach --}}

    {{-- @foreach ($product as $item)
        <H3>{{ $item }}</H3>
    @endforeach --}}
    <a href="{{ route('products') }}">Link</a>
</body>
</html>