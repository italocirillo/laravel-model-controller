@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="container text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 align-items-start">
                @foreach ($movies as $movie)
                    <div class="col py-3">
                        <div class="card">
                            <img src="{{ $movie['image'] }}" class="card-img-top" alt="{{ $movie['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie['title'] }}</h5>
                                <p class="card-text">{{ $movie['original_title'] }}</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{ $movie['nationality'] }}</li>
                                    <li class="list-group-item">Voto: {{ $movie['vote'] }}</li>
                                    <li class="list-group-item">Data d'uscita: {{ $movie['date'] }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
