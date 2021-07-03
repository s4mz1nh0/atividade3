@extends('Admin.Layout.principal')

@section('conteudo-principal')

    <section class= "section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Games</th>
                    <th class="center-align">Desenvolvedora</th>
                    <th class="center-align"> Links para download</th>

                    <th class="right-align">✎Opções✎</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($games as $game)
                    <tr>
                        <td>{{$game->nome}}</td>
                        <td>{{$game->desenvolvedora}}</td>
                        <td>{{$game->link}}</td>

                        <td class="right-align">

                            <a href="{{route('Admin.Games.formEditar', $game->id)}}">
                            <span>
                                <i class="material-icons pink-text text-lighten-3">edit</i>
                            </span>
                        </a>

                            <form action="{{route('Admin.Games.deletar', $game->id)}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')

                                <button style="border:0;background:transparent;" type="submit">
                                    <span style="cursor: pointer">
                                        <i class="material-icons purple-text text-darken-4">delete_forever</i>
                                    </span>
                                </button>
                            </form>

                        </td>


                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem Games para download.</td>
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

