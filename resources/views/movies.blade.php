@extends('layouts.app')

@section('main')
<!-- {{dump($movies)}} -->
@foreach ($movies as $movie)
{{$movie->title}}
@endforeach

@endsection
