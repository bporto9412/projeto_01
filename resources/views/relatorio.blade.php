<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 5px 15px;
        }

        td, h1, p {
            text-align: center;
        }

        tr.border_bottom td {
            border-bottom: 1px solid black;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 400;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>
<body>
    <h1> Relatório de Clientes</h1>
<div>
    <table width="100%">
        <thead>
        <tr>
            <th>#</th>
            <th style="text-align: left">Nome do Cliente</th>
            <th>Galc.</th>
            <th>Porta</th>
            <th>Velocidade</th>
            <th style="text-align: left">Endereço</th>
        </tr>
        </thead>
        <tbody>
        @foreach($model as $item)
            <tr class="border_bottom">
                <td>{{$item->id}}</td>
                <td style="text-align: left">{{$item->name}}</td>
                <td>{{$item->galc}}</td>
                <td>{{$item->porta}}</td>
                <td>{{$item->speed}} - Mbps</td>
                <td style="text-align: left">{{$item->adress}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
