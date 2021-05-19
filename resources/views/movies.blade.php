@extends('layouts.app')

@section('main')
<!-- {{dump($movies)}} -->
<div class="" style="display: flex; justify-content: space-around; margin-top: 50px;">


@foreach ($movies as $movie)
<div class="" style="width: 120px; height: 150px; background-color: lightblue; text-align: center;">
  {{$movie->title}} <br>
  {{$movie->vote}} <br>
  {{$movie->date}} <br>
</div>
@endforeach

</div>

@endsection
