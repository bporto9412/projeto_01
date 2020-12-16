@extends('templates.template')

@section('content')

    <div style="padding-top: 25px" class="container container-fluid">
        <div style="margin-bottom: 25px" class="table-responsive">
            <h2 style="text-align: center">Lista de clientes</h2>
            <a href="{{url('clients/create')}}">
                <button style="float: right; position: relative" class="badge-pill badge-warning">Cadastrar</button>
            </a>
            <a href="{{url('relatorio')}}">
                <button class="badge-pill badge-success" style="float: right; position: relative">Gerar relatório</button>
            </a>
        </div>
        @csrf
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Cliente</th>
                <th scope="col">Galc. / Porta</th>
                <th scope="col">Velocidade Contratada</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($client as $clients)
                @php
                    $user = $clients->find($clients->id)->users;
                @endphp

                <tr>
                    <th scope="row">{{$clients->id}}</th>
                    <td>{{$clients->name}}</td>
                    <td>{{$clients->galc}} / {{$clients->porta}}</td>
                    <td>{{$clients->speed}} - Mbps</td>
                    <td>{{$clients->adress}}</td>
                    <td>
                        <a href="{{url("clients/$clients->id")}}">
                            <button class="btn btn-outline-info">Visualizar</button>
                        </a>

                        <a href="{{url("clients/$clients->id/edit")}}">
                            <button class="btn btn-outline-warning">Editar</button>
                        </a>

                        <a href="{{url("clients/$clients->id")}}" class="js-del">
                            <button class="btn btn-outline-danger">Excluir</button>
                        </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        <span style="align-items: center">{{$client->links()}}</span>
    </div>



@endsection
