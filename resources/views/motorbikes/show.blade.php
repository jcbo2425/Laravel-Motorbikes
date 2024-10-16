<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Motorbikes</title>
    </head>

    <body>
        <a href="{{ route('motorbikes.create') }}">Create new motorbike</a>
        <h1>Motorbikes list</h1>
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
                    <td>
                        <form action="{{ route('motorbikes.destroy',$moto->id) }}" method="POST">
                            <a href="{{ route('motorbikes.edit',$moto->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data</td>
                </tr>
            @endforelse
        </table>
    </body>
</html>
