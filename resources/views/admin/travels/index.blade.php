@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Travels!</h2>
        <a href="{{ route("admin.travels.create") }}">Create new travel</a>

        <div class="row mb-5">            
            @forelse ($travels as $travel)
                <div class="col-4">
                    <h3>{{ $travel->place }}</h3>
                    <h6>{{ $travel->country }}</h6>
                    <a href="{{ route("admin.travels.show", $travel) }}">
                        <img class="img-fluid" src="{{ $travel->image_url }}" alt="{{ $travel->place }}" title="{{ $travel->place }}">
                    </a>
                    <p>{{ $travel->description }}</p>
                    <h3>{{ $travel->price }}&euro;</h3>
                    <br>
                    {{-- <a href="{{ route("admin.travels.edit") }}">Modification</a> --}}
                </div>
            @empty
                <h4>Non ci sono contenuti da mostrare</h4>
            @endforelse
        </div>
        <a href="{{ route("welcome") }}">Back to Main page</a>
        <br>
        <a href="{{ route("admin.home") }}">Back to home</a>

    </div>

@endsection