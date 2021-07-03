@extends('Admin.Layout.principal')

@section('conteudo-principal')

    <section class= "section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Game</th>
                    <th>Desenvolvedora</th>
                    <th>Link</th>

                    <th class="right-align">✎  Opções de alteração  ✎</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($games as $game)
                    <tr>
                        <td>{{$game->nome}}</td>
                        <td>{{$game->desenvolvedora}}</td>
                        <td>{{$game->link}}</td>

                        <td class="right-align">
                            <a class="waves-effect waves-light #f48fb1 red lighten-3
                            btn-small">Editar</a>
                            <a class="waves-effect waves-light #f48fb1 red lighten-3
                            btn-small">Excluir</a>
                        </td>


                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Não existem Games para download.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('Admin.Games.form')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection
