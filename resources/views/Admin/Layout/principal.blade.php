<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>DownGames</title>
</head>
<body>

{{--Menu topo--}}
<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">DownGames</a>
            <ul class="right">
                <li>
                    <a href="{{route('Admin.Compatibilidades.index')}}">Configuração</a>
                </li>
                <li>
                    <a href="{{route('Admin.Games.index')}}">Games</a>
                </li>
            </ul>

        </div>
    </div>

</nav>

{{--Conteudo Purincipal--}}
    <div class="container">
        @yield('conteudo-principal')
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    @if (session('sucesso'))

        M.toast({html:"{{session('sucesso')}}"});

    @endif

    document.addEventListener('DOMContentLoaded', function(){
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });

</script>

</body>
</html>
