@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h3>{{ $travel->place }}</h3>
                <h6>{{ $travel->country }}</h6>
                <img class="img-fluid" src="{{ $travel->image_url }}" alt="{{ $travel->place }}" title="{{ $travel->place }}">
                <p>{{ $travel->description }}</p>
                <h3>{{ $travel->price }}&euro;</h3>
            </div>
        </div>
        <a href="{{ route("admin.travels.index") }}">Back to travels</a>
    </div>
@endsection