@extends('layout')

@section('content')
<h1><label class="jc">JC</label> Motorbikes <label class="redirect"><a href="{{route('motorbikes.index')}}">Back to the list</a></label></h1>
    <div class="content">
        <h2>Create a new motorbike: </h2>
    <form method="POST" action="{{route('motorbikes.store')}}">
        @csrf
        <div class="form-group">
            <input type="text" name="model" class="form-control" id="model" placeholder="Motorbike model">
        </div>

        <div class="form-group">
            <input type="text" name="cylinderCap" class="form-control" id="cylinderCap" placeholder="Cylinder Capacity">
        </div>

        <div class="form-group">
            <input type="text" name="color" class="form-control" id="color" placeholder="Color">
        </div>
        <button type="submit" class="submit">Create</button>
    </form>
    </div>
@endsection
