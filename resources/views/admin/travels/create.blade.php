@extends('layouts.app')

@section('content')
    <div class="container">
       
        <form action="{{ route("admin.travels.store") }}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="place" class="form-label">Insert Place</label>
                <input type="text" class="form-control" id="place" name="place" placeholder="Ex San Francisco">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Insert Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Ex California">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Insert Description</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Ex Lorem ...">
        
                </textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Insert Travel price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Ex 500">
            </div>
            <div class="mb-5">
                <label for="image" class="form-label">Insert Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Url ...">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
            <a class="m-3" href="{{ route("admin.travels.index") }}">Back to Travels</a>
        </form>
    </div>
    
@endsection