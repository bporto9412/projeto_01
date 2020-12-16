@extends('templates.template')

@section('content')

    @php
        $user = $client->find($client->id)->users;
    @endphp

    <div class="col-md-6" style=" padding: 20px; margin: 100px auto;" class="form-control">
        <hr>
        <h5 style="text-align: center;padding-top: 10px" id="modal-mensagem">Informações do Cliente</h5>
        <hr>
        <p><b>Nome do Cliente:</b> {{$client->name}}</p>
        <p><b>Galc. / Porta:</b> {{$client->galc}} / {{$client->porta}}</p>
        <p><b>Velocidade Contratada:</b> {{$client->speed}} - Mbps</p>
        <p><b>Endereço de instalação:</b> {{$client->adress}}</p>
        <hr>
        <h5 style="text-align: center">Informação do atendimento</h5>
        <hr>
        <p><b>Nome do Atendente:</b> {{$user->name}}</p>
        <p><b>Data:</b> {{$client->created_at}}</p>

        <a href="{{url("clients")}}">
            <button style="float: right" class="btn btn-outline-primary">Voltar</button>
        </a>
    </div>


@endsection
