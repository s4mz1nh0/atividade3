@extends('Admin.Layout.principal')


@section('conteudo-principal')

<section class="section">

    <div class="row">
        <span class="col s12">
            <h5>Game</h5>
            <p>{{$compatibilidade->game->nome}}</p>
        </span>
    </div>
    <div class="row">
        <span class="col s12">
            <h5>Desenvolvedora</h5>
            <p>{{$compatibilidade->game->desenvolvedora}}</p>
        </span>
    </div>
    <div class="row">
        <span class="col s12">
            <h5>Link</h5>
            <p>{{$compatibilidade->game->link}}</p>
        </span>
    </div>

    <div class="row">
        <span class="col s12">
            <h5>Sistema operacional</h5>
            <p>{{$compatibilidade->sistema->nome}}</p>
        </span>
    </div>

    <div class="row">
        <span class="col s12">
            <h5>Arquitetura</h5>
            <p>{{$compatibilidade->arquitetura->nome}}</p>
        </span>
    </div>

    <div class="row">
        <span class="col s12">
            <h5>Processador exigido</h5>
            <p>{{$compatibilidade->processador}}</p>
        </span>
    </div>

    <div class="row">
        <span class="col s12">
            <h5>Placa de video exigida</h5>
            <p>{{$compatibilidade->video}}</p>
        </span>
    </div>
    <div class="row">
        <span class="col s12">
            <h5>Memoria RAM exigida em Gigabyte</h5>
            <p>{{$compatibilidade->ram}}</p>
        </span>
    </div>
    <div class="row">
        <span class="col s12">
            <h5>Armazenamento exigido em GigaByte</h5>
            <p>{{$compatibilidade->espaco}}</p>
        </span>
    </div>

    <div class="right-align">
        <a href="{{url()->previous()}}" class="btn-flat waves-effect">VOLTAR</a>
    </div>

</section>




@endsection
