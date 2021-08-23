@extends('Admin.Layout.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Game</th>
                    <th>Sistema Operacional</th>
                    <th>Arquitetura</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($compatibilidade as $compatibilidade)
                    <tr>
                        <td>{{$compatibilidade->game->nome}}</td>
                        <td>{{$compatibilidade->sistema->nome}}</td>
                        <td>{{$compatibilidade->arquitetura->nome}}</td>

                        {{--ver--}}
                        <td class="right-align">
                            <a href="{{route('Admin.Compatibilidades.show', $compatibilidade->id)}}" title="ver">
                                <span>
                                    <i class="material-icons pink-text text-lighten-3">remove_red_eye</i>
                                </span>
                            </a>

                        {{--editar--}}

                            <a href="{{route('Admin.Compatibilidades.edit', $compatibilidade->id)}}"title="editar">
                                <span>
                                    <i class="material-icons pink-text text-lighten-3">edit</i>
                                </span>
                            </a>

                            <form action="{{route('Admin.Compatibilidades.destroy', $compatibilidade->id)}}" title="remover" method="POST" style="display: inline;">
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
                        <td colspan="4">Não existem games cadastrados.</td>
                    </tr>
                @endforelse
            </tbody>

        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('Admin.Compatibilidades.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>

@endsection
