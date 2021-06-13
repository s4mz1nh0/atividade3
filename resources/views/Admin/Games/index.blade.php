@extends('Admin.Layout.principal')

@section('conteudo-principal')

    <section class= "section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Game</th>
                    <th>Desenvolvedora</th>
                    <th class="right-align">Opções de download</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($games as $game)
                    <tr>
                        <td>{{$game->nome}}</td>
                        <td>{{$game->desenvolvedora}}</td>

                        <td class="right-align">
                            <a class="waves-effect waves-light #f48fb1 red lighten-3
                            btn-small">Google Drive</a>
                            <a class="waves-effect waves-light #f48fb1 red lighten-3
                            btn-small">MEGA</a>

                        </td>


                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem Games para download.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>

@endsection
