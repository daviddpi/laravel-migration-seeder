@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Viaggi!</h2>
        <div class="row">            
            @forelse ($travels as $travel)
                <div class="col-4">
                    <h3>{{ $travel->place }}</h3>
                    <h6>{{ $travel->country }}</h6>
                    <img class="img-fluid" src="{{ $travel->image_url }}" alt="{{ $travel->place }}" title="{{ $travel->place }}">
                    <p>{{ $travel->description }}</p>
                    <h3>{{ $travel->price }}&euro;</h3>
                </div>
            @empty
                <h4>Non ci sono contenuti da mostrare</h4>
            @endforelse
        </div>
    </div>

@endsection