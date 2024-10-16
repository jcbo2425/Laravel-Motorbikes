<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Motorbikes</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: #404258;
                text-align: center;
            }
            
            .jc {
                color: #ffffff;
            }

            h1 {
                color: #6B728E;
                text-shadow: 3px 3px 20px  rgba(0, 0, 0, 1)
            }

            p {
                color: #ffffff;
            }

            .divTabla {
                align-content: center;
                background-color: #6B728E;
                padding: 10px; 
            }

            table {
                text-align: center;
                margin: 0 auto;
            }

            tr, td, th {
                padding: 10px;
                border: 1px solid black;
            }

            th {
                background-color: #50577A;
            }

            .buttons {
                border: none;
            }

            a {
                text-decoration: none;
                color: black;
            }

            a:hover {
                color: #ffffff;
            }

            .edit{
                border: 1px solid black;
                background-color: #C69749;
                color: black;
                padding: 4px;
                text-align: center
            }

            .edit:hover {
                background-color: #735F32;
                color: #ffffff;
            }

            .del {
                padding: 5px;
                text-decoration: ;
                background-color: #FF204E;
            }

            .del:hover {
                background-color: #A0153E;
            }

            .add{
                background-color: #5c5cca;
                padding: 10px;
                margin-left: 40%;
                margin-right: 40%;
                margin-top: 10px;
                text-align: center;
            }

            .add:hover {
                background-color: #474796;
            }

        </style>
    </head>

    <body>
        <h1><label class="jc">JC</label> Motorbikes</h1>
        <p>Welcome to a test page, a motorbikes app</p>
        <div class="divTabla">
            <h2>Moto-list</h2>
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
