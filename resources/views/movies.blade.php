@extends('layouts.app')

@section('main')
<!-- {{dump($movies)}} -->
<div class="" style="display: flex">


@foreach ($movies as $movie)
<div class="">
  {{$movie->title}} <br>
  {{$movie->id}} <br>
  {{$movie->original_title}} <br>
  {{$movie->vote}} <br>
  {{$movie->date}} <br>
</div>
@endforeach

</div>

@endsection
