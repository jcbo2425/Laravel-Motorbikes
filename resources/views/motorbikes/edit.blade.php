@extends('layout')

@section('content')
<h1>Edit motorbike</h1>
    <form method="POST" action="{{ route('motorbikes.update',$motorbike->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" id="model" placeholder="Enter motorbike model" value="{{$motorbike->Model}}">
        </div>

        <div class="form-group">
            <label for="cylinderCap">Cylinder capacity</label>
            <input type="text" name="cylinderCap" class="form-control" id="cylinderCap" placeholder="Enter cylinder capacity" value="{{$motorbike->cylinderCap}}">
        </div>

        <div class="form-group">
            <label for="model">Color</label>
            <input type="text" name="color" class="form-control" id="color" placeholder="Enter motorbike color" value="{{$motorbike->Color}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="{{route('motorbikes.index')}}">Back to the list</a>
@endsection
