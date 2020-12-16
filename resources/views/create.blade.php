@extends('templates.template')

@section('content')

        <h2 style="text-align: center">@if(isset($client))Editar Cliente @else Cadastrar Cliente @endif</h2>

        @if(isset($erros) && count($erros) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($erros->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>
        @endif

        @if(isset($client))
            <form name="client-form-edit" style="padding-top: 45px" id="client-form-edit" method="post" action="{{url("clients/$client->id")}}">
                @method('PUT')
        @else
            <form name="client-form" style="padding-top: 45px" id="client-form" method="post" action="{{url('clients')}}">
        @endif

        @csrf

        <div class="container container-fluid">
            <div class="form-row">
                <div class="form-group col-md-8">
                    <input class="form-control"  type="text" name="name" id="name" value="{{$client->name ?? ''}}"
                            placeholder="Nome" data-error="Máx. de cinquenta (50) caracteres">
                </div>
                <div class="form-group col-md-4">
                    <input class="form-control"  type="text" name="cpf" id="cpf" value="{{$client->cpf ?? ''}}"
                           placeholder="Cpf">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" maxlength="50" required value="{{$client->galc ?? ''}}"
                           name="galc" id="galc" placeholder="Galc.">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" name="porta" id="porta" value="{{$client->porta ?? ''}}"
                           placeholder="Porta">
                </div>
                <div class="form-group col-md-4">
                    <input class="form-control"name="speed" required id="speed" value="{{$client->speed ?? ''}}"
                           placeholder="Velocidade">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" maxlength="100" required name="adress"
                       value="{{$client->adress ?? ''}}" id="adress" placeholder="Endereço de Instalação">

            </div>

            <select class="form-control" required name="id_user" id="id_user">
                <option value="{{$client->users->id ?? ''}}">{{$client->users->name ?? "Selecione o Atendente"}}</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>

            <button type="submit" class="btn btn-success">Salvar</button>

            <a href="{{url("clients")}}">
                <button class="btn btn-outline-primary">Voltar</button>
            </a>

        </div>
    </form>
@endsection
