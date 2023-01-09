@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4">
        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-2">
                    <div class="card">
                        <img src="{{ $movie['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <span class="d-block my-3">{{ $movie['original_title'] }}</span>
                            <span class="d-block my-3">Vote: {{ $movie['vote'] }}</span>
                            <span class="d-block my-3">Nationality: {{ $movie['nationality'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection