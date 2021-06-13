@extends('Admin.Layout.principal')

@section('conteudo-principal')

    <section class= "section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Game</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($games as $game)
                    <tr>
                        <td>{{$game->nome}}</td>
                        <td class="right-align">Excluir - Remover</td>
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
