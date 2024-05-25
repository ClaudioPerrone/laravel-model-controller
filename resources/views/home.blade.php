@extends('layouts.app')

@section('main-content')
    <h1>Home</h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-2">
                    <div class="card p-3">
                        <h3 class="text-center">Title: {{ $movie['title'] }}</h3>
                        <h5 class="text-center">OG title: {{ $movie['original_title'] }}</h5>
                        <h5 class="text-center">Nationality: {{ $movie['nationality'] }}</h5>
                        <h5 class="text-center">Date: {{ $movie['date'] }}</h5>
                        <h5 class="text-center">Vote: {{ $movie['vote'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection