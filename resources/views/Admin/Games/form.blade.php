@extends('Admin.Layout.principal')


@section('conteudo-principal')

    <section class="section">

<form action="{{$action}}" method="POST">

    @csrf
@isset($game)
@method('PUT')

@endisset
            <div class="input-field">
                <input type="text" name="nome" id="nome" value="{{old('nome', $game->nome ?? '')}}"/>
                <label for="nome">Nome</label>
                @error('nome')
                    <span class="red-text text-acent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="desenvolvedora" id="desenvolvedora" value="{{old('desenvolvedora', $game->desenvolvedora ?? '')}}"/>
                <label for="desenvolvedora">Desenvolvedora</label>
                @error('desenvolvedora')
                    <span class="red-text text-acent-3"><small>{{$message}}</small></span>
                @enderror
            </div>

            <div class="input-field">
                <input type="text" name="link" id="link" value="{{old('link', $game->link ?? '')}}"/>
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
