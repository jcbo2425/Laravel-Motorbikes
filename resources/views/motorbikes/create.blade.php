@extends('layout')

@section('content')
    <h1>Create a new Motorbike</h1>
    <form method="POST" action="{{route('motorbikes.store')}}">
        @csrf
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Enter motorbike model">
        </div>

        <div class="form-group">
            <label for="cylinderCap">Cylinder capacity</label>
            <input type="text" name="cylinderCap" class="form-control" id="cylinderCap" placeholder="Enter cylinder capacity">
        </div>

        <div class="form-group">
            <label for="model">Color</label>
            <input type="text" name="color" class="form-control" id="color" placeholder="Enter motorbike color">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{route('motorbikes.index')}}">Back to the list</a>
@endsection
