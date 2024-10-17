<!DOCTYPE html>
<html lang="en">

@extends('layout')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Motorbikes</title>
    </head>

    <body>
        <h1><label class="jc">JC</label> Motorbikes     <label class="msg">Welcome to a test page, a motorbikes app</label></h1>
        <div class="divTabla">
            <h2>Motorbikes List</h2>
            <table>
                <tr>
                    <th>Model</th>
                    <th>Cylinder capacity</th>
                    <th>Color</th>
                </tr>
                
                @forelse ($motorbikes as $moto)
                    <tr>
                        <td>{{$moto->Model}}</td>
                        <td>{{$moto->cylinderCap}}</td>
                        <td>{{$moto->Color}}</td>
                        <td class="buttons">
                            <form action="{{ route('motorbikes.destroy',$moto->id) }}" method="POST">
                                <div class="edit"> <a class="update" href="{{ route('motorbikes.edit',$moto->id) }}">Edit</a></div>

                                @csrf
                                @method('DELETE')

                                <button class="del" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">There are no data</td>
                    </tr>
                @endforelse
            </table>
            <div class="add">
                <a href="{{ route('motorbikes.create') }}">Create new motorbike</a>
            </div>
        </div>
    </body>
</html>
