@extends('layouts.app')

@section('content')
<section class="container py-4">
    <div class="row row-cols-5 gy-2">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card">
                    <img class="rounded-top-2" src="{{$movie->image}}" alt="movie poster">
                    <h4 class="text-center p-2">{{$movie->title}}</h4>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection