<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@extends('layouts.app_movie')
@section('title', 'Page Title')

@section('content')
<h1>MovieList</h1>

<ol>
@foreach($items as $item)
    <li>{{ $item }}</li>
@endforeach
</ol>

@endsection
</body>
</html>
