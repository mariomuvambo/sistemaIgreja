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
    <h2 id="subtitulo">Editar Inscrição do Ministério</h2>
</div>

<hr style="margin-bottom: 15px;">


<div class="container">
    <form action="/MinisteriosUser/update/{{ $editar->id }}" method="post">

        @csrf
        @method('PUT')
        <div class="row">

            <div class="col-3"></div>

            <div class="col-5">
                <label for="">Selecione o Ministério</label>
                <select class="form-select form-select-md" aria-label=".form-select-sm example" name="selecioneMinisterio" id="selecioneMinisterio">

                    @foreach($registoSelect as $registoMinisterio)

                    <option value="{{ $registoMinisterio->novoMinisterio }}" {{ ($registoMinisterio->novoMinisterio == 'Informatica') ? 'selected' : ''}}> 
                        {{$registoMinisterio->novoMinisterio }}
                    </option>
                    @endforeach

                    <!--             

                    <option value="Liturgia" {{ $editar->selecioneMinisterio == "Liturgia"? 'selected': ''}} >Liturgia</option>
                    <option value="familia" {{ $editar->selecioneMinisterio == "familia"? 'selected': ''}}  >Da familia</option>
                    <option value="PastoralCariatativoSocial" {{ $editar->selecioneMinisterio == "PastoralCariatativoSocial"? 'selected': ' '}}  >Pastoral cariatativo-social</option>

                    <option value="administracao" {{ $editar->selecioneMinisterio == "administracao"? 'selected': ' '}}  >administração</option>
                    <option value="catequese" {{ $editar->selecioneMinisterio == "catequese"? 'selected': ''}}  >Catequese e formação permanente</option>

                    <option value="EcumenismoReligioso" {{ $editar->selecioneMinisterio == "EcumenismoReligioso"? 'selected': ''}}  >Ecumenismo e do dialogo inter-religioso</option>
                    <option value="animacaoNucleo" {{ $editar->selecioneMinisterio == "animacaoNucleo"? 'selected': ''}}  >Da animação dos núcleos</option>  -->

                </select>
            </div>
        </div>
        <div class="row">
            <hr style="margin-bottom: 15px; margin-top: 10px;">
        </div>

        <div class="row">
            <div class="col-3">
                <label for="">Nome</label>
                <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="nome" id="apelido" value="{{$editar->nome}}">
            </div>
            <div class="col-3">
                <label for="">Apelido</label>
                <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="apelido" id="apelido" value="{{$editar->apelido}}">
            </div>

            <div class="col-3">
                <label for="">Contacto</label>
                <input type="number" class="form-control" placeholder="Apenas um contacto" aria-label="contacto" name="contacto" id="contacto" value="{{$editar->contacto}}">
            </div>
        </div>



        <div class="row">
            <div class="col-3">
                <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Editar">Editar</button>
            </div>
        </div>

    </form>


    #todo


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Apelido</th>
                <th scope="col">Contacto</th>
                <th scope="col">Ministerio</th>
            </tr>
        </thead>

        <tbody>
            <tr class="table-primary">
                <th scope="row">{{$editar->id}}</th>
                <td>{{$editar->nome}}</td>
                <td>{{$editar->apelido}}</td>
                <td>{{$editar->contacto}}</td>
                <td>{{$editar->selecioneMinisterio}}</td>
            </tr>

        </tbody>

    </table>





</div>


@endsection