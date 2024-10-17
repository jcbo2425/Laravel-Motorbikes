<html>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #404258;
        }
        
        .jc {
            color: #ffffff;
        }

        h1 {
            color: #6B728E;
            text-shadow: 3px 3px 20px  rgba(0, 0, 0, 1)
        }

        h2 {
            text-align: center;
        }

        .msg {
            margin-top: 8px;
            font-size: 18px;
            float: right;
            color: #ffffff;
        }

        .redirect {
            margin-top: 3px;
            font-size: 18px;
            float: right;
            padding: 10px;
            background-color: #C69749;
        }

        .redirect:hover {
            background-color: #735F32; 
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
            color: #ffffff;
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

        .content {
        background-color: #6B728E;
        padding: 10px; 
        text-align: center;
    }

    .form-group {
        padding: 10px;
    }

    .submit{
        background-color: #5c5cca;
        padding: 10px;
        width: 20%;
        font-size: 18px;
    }

    .submit:hover {
        background-color: #474796;
        color: #ffffff;
    }
        </style>
    <head>
        <title>Motorbikes</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
