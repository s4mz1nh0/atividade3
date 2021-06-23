@extends('Admin.Layout.principal')


@section('conteudo-principal')

    <section class="section">
        <form action="" method="POST">

            <div class="input-field">
                <input type="text" name="nome" id="nome" />
                <label for="nome">Nome</label>
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
