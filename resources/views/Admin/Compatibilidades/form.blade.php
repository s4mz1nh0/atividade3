@extends('Admin.Layout.principal')

@section('conteudo-principal')

<section class="section">

    <form action="{{$action}}" method="POST">
        @csrf

        @isset($compatibilidade)
            @method('PUT')
        @endisset

        <div class="row">
            <div class="input-field col s12">
                <select name="game_id" id="game_id">
                    <option value="" disabled selected>Selecione um Game</option>
                    @foreach ($game as $game)
                        <option value="{{$game->id}}"
                            {{old('game_id', $compatibilidade->game->id ?? '') == $game->id ? 'selected' : ''}}
                            >{{$game->nome}}</option>

                    @endforeach
                </select>
                <label for="game_id">Selecione o Game registrado</label>
                @error('game_id')
                        <span class="red-text t ext-acent-3"><small>{{$message}}</small></span>
                    @enderror
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select name="sistema_id" id="sistema_id">
                    <option value="" disabled selected>Selecione o sistema operacional do Game</option>
                    @foreach ($sistema as $sistema)
                        <option value="{{$sistema->id}}"
                            {{old('sistema_id', $compatibilidade->sistema->id ?? '') == $sistema->id ? 'selected' : ''}}
                            >{{$sistema->nome}}</option>

                    @endforeach

                </select>
                <label for="sistema_id">Sistema operacional exigido</label>
                @error('sistema_id')
                        <span class="red-text text-acent-3"><small>{{$message}}</small></span>
                    @enderror
             </div>
        </div>

        <div class="row">
            @foreach ($arquitetura as $arquitetura)
                <span class="col s2">
                    <label style="margin-right: 30px">
                    <input type="radio" name="arquitetura_id" id="arquitetura_id"
                        class="with-gap" value="{{$arquitetura->id}}"
                        {{old('arquitetura_id', $compatibilidade->arquitetura->id ?? '') == $arquitetura->id ? 'checked' : ''}}
                        />
                        <span>{{$arquitetura->nome}}</span>
                    </label>
                </span>
                @endforeach

            @error('arquitetura_id')
                 <span class="red-text text-acent-3"><small>{{$message}}</small></span>
            @enderror
        </div>

       <div class="row">
           <div class="input-field col s3">
               <input type="text" name="processador" id="processador" value="{{old('processador', $compatibilidade->processador ?? '')}}"/>
               <label for="processador">Processador minimo exigido</label>
               @error('processador')
               <span class="red-text text-acent-3"><small>{{$message}}</small></span>
           @enderror
           </div>


            <div class="input-field col s3">
                <input type="text" name="video" id="video" value="{{old('video', $compatibilidade->video ?? '')}}"/>
                <label for="video">Placa de video minima exigida</label>
                @error('video')
               <span class="red-text text-acent-3"><small>{{$message}}</small></span>
           @enderror
          </div>

          <div class="input-field col s3">
            <input type="text" name="ram" id="ram" value="{{old('ram', $compatibilidade->ram ?? '')}}"/>
            <label for="ram">RAM minima exigida - Gb</label>
            @error('ram')
               <span class="red-text text-acent-3"><small>{{$message}}</small></span>
           @enderror
        </div>

            <div class="input-field col s3">
                <input type="text" name="espaco" id="espaco" value="{{old('espaco', $compatibilidade->espaco ?? '')}}"/>
                <label for="espaco">Armazenamento exigido - Gb</label>
                @error('espaco')
               <span class="red-text text-acent-3"><small>{{$message}}</small></span>
           @enderror
            </div>

        </div>

        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('Admin.Compatibilidades.index')}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Salvar
            </button>
        </div>


    </form>

</section>

@endsection
