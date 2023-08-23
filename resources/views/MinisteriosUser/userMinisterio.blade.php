@extends('layouts.mainUser')

@section('title', 'Inscrição!')

@section('content')

<div class="row">
        @if(session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
        @endif
    </div>

<div>
    <h2 id="subtitulo">Inscrição do Ministério</h2>
</div>

<hr style="margin-bottom: 15px;">



<div class="container">
    <form action="/MinisteriosUser" method="post">
        @csrf
        <div class="row">


            <div class="col-6">
                <label for="">Selecione o Ministério</label>

                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="selecioneMinisterio" id="selecioneMinisterio">

                    @foreach($registoSelect as $registoMinisterio)

                    <option value="{{ $registoMinisterio->novoMinisterio }}" {{ ($registoMinisterio->novoMinisterio == 'Informatica') ? 'selected' : ''}}>
                        {{$registoMinisterio->novoMinisterio }}
                    </option>
                    @endforeach
                    
                    <!-- <option selected>Selecionar...</option>
                    <option value="Liturgia">Liturgia</option>
                    <option value="familia">Da familia</option>
                    <option value="PastoralCariatativoSocial">Pastoral cariatativo-social</option>
                    <option value="administracao">administração</option>
                    <option value="catequese">Catequese e formação permanente</option>
                    <option value="EcumenismoReligioso">Ecumenismo e do dialogo inter-religioso</option>
                    <option value="animacaoNucleo">Da animação dos núcleos</option> -->

                </select>

            </div>
            <div class="col-6">
                <label for="">Detalhes dos Ministerio</label>
                <a href="/MinisteriosUser/detalhesMinisterio" class="btn btn-primary" style="padding-left: 20px;">Detalhes</a>
            </div>



        </div>
        <div class="row">
            <hr style="margin-bottom: 15px; margin-top: 10px;">
        </div>

        <div class="row">
            <div class="col-3">
                <label for="">Nome</label>
                <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="nome" id="apelido" value="{{old('nome' )}}">
                @error('nome') <span class="text-danger" >{{$message}}</span>@enderror
            </div>
            <div class="col-3">
                <label for="">Apelido</label>
                <input type="text" class="form-control" placeholder="Apelido" aria-label="Apelido" name="apelido" id="apelido" value="{{old('apelido') }}">
                @error('apelido') <span class="text-danger" >{{$message}}</span>@enderror
            </div>

            <div class="col-3">
                <label for="">Contacto</label>
                <input type="number" class="form-control" placeholder="Apenas um contacto" aria-label="contacto" name="contacto" id="contacto" value="{{old('contacto') }}">
                @error('contacto') <span class="text-danger" >{{$message}}</span>@enderror
            </div>
        </div>



        <div class="row">
            <div class="col-3">
                <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Inscrever">Inscrever</button>
            </div>
        </div>

    </form> 


    @if(count($userministerios) > 0)

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Apelido</th>
                <th scope="col">Contacto</th>
                <th scope="col">Descricao</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($userministerios as $ministerio)
            <tr class="table-primary">
                <th>{{$loop->index+ 1}}</th>
                <td scope="col">{{$ministerio->nome}} </td>
                <td scope="col">{{$ministerio->apelido}}</td>
                <td scope="col">{{$ministerio->contacto}}</td>
                <td scope="col">{{$ministerio->selecioneMinisterio}}</td>

                <td scope="col">


                    <form action="/MinisteriosUser/{{ $ministerio->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/MinisteriosUser/editar/{{$ministerio->id}}" class="btn btn-primary">Editar</a>
                        <button class="btn btn-danger" type="submit" style="margin-left: 10px;">Apagar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    @else
    <div class="row">
        <div class="col">
            <h1 style="color: red;"># Nao se escreveu ainda</h1>
        </div>
    </div>

    @endif



</div>


@endsection