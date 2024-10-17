@extends('layout')

@section('content')
<h1><label class="jc">JC</label> Motorbikes <label class="redirect"><a href="{{route('motorbikes.index')}}">Back to the list</a></label></h1>
<div class="content">
<h2>Edit motorbike</h2>
        <form method="POST" action="{{ route('motorbikes.update',$motorbike->id) }}">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="model">Model: </label>
                <input type="text" name="model" class="form-control" id="model" placeholder="Enter motorbike model" value="{{$motorbike->Model}}">
            </div>

            <div class="form-group">
                <label for="cylinderCap">Cylinder capacity: </label>
                <input type="text" name="cylinderCap" class="form-control" id="cylinderCap" placeholder="Enter cylinder capacity" value="{{$motorbike->cylinderCap}}">
            </div>

            <div class="form-group">
                <label for="model">Color: </label>
                <input type="text" name="color" class="form-control" id="color" placeholder="Enter motorbike color" value="{{$motorbike->Color}}">
            </div>
            <button type="submit" class="submit">Submit</button>
        </form>
</div>
@endsection
