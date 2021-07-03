@extends('Admin.Layout.principal')


@section('conteudo-principal')

    <section class="section">
        <form action="{{route('Admin.Games.adicionar')}}" method="POST">

            @csrf

            <div class="input-field">
                <input type="text" name="nome" id="nome" />
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-acent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="desenvolvedora" id="desenvolvedora" />
                <label for="desenvolvedora">Desenvolvedora</label>
                @error('desenvolvedora')
                    <span class="red-text text-acent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="link" id="link" />
                <label for="link">Link</label>
                @error('link')
                    <span class="red-text text-acent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection
