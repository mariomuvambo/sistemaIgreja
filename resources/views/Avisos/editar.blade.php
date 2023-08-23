@extends('layouts.mainAdmin')

@section('title', 'Avisos')

@section('content')

<div class="row">
    @if(session('msg'))
    <p class="msg"> {{session('msg')}} </p>
    @endif
</div>

<div>
    <h2 id="subtitulo">EDITANDO AVISOS</h2>
</div>
 
<hr style="margin-bottom: 15px;">

<div class="container">

    <form action="/Avisos/update/{{ $editar->id }}" method="POST">

        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="aviso">Titulo do Aviso</label>
                <input type="text" class="form-control" name="tituloAviso" id="tituloAviso" value="{{$editar->tituloAviso}}">
            </div>

            <div class="col">
                <label for="">Data do Aviso</label>
                <input type="date" class="form-control" name="dataAviso" id="dataAviso" value="{{$editar->dataAviso}}">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Local da Realização</label>
                <input type="text" class="form-control" name="localAviso" id="localAviso" value="{{$editar->localAviso}}">


            </div>

            <div class="col">
                <label for="">Data da Realização </label>
                <input type="date" class="form-control" name="dataRAviso" id="dataRAviso" value="{{$editar->dataRAviso}}">

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Participantes</label>
                <input type="text" class="form-control" name="participanteAviso" id="participanteAviso" value="{{$editar->participanteAviso}} ">
            </div>

            <div class="col">
                <label for="">Hora de Realização</label>
                <input type="time" class="form-control" name="horaAviso" id="horaAviso" value="{{$editar->horaAviso}}" >
            </div>
        </div>

        <!-- <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição do aviso</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricaoAviso" id="descricaoAviso">{{ old('descricaoAviso', $editar->descricaoAviso) }}</textarea>
            </div>
        </div>


        <button class="btn btn-info" type="submit" value="Editar Aviso"> Editar Aviso</button>

    </form>

    <hr style="margin-top: 15px;">

    <a href="" style="color:red"> # Ver todos avisos</a>

    <table class="table" >
    <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Data Aviso</th>
                <th scope="col">LocalRealizacao</th>
                <th scope="col">Data Realizacao</th>
                <th scope="col">Participantes</th>
                <th scope="col">Hora de Realizacao</th>
                <th scope="col">Descrição</th>
              
            </tr>
        </thead> 
    <tbody>

    <tr class="table-success">
            <th>{{$editar->id}}</th>
                <td>{{$editar->tituloAviso}}</td>
                <td> {{$editar->dataAviso}}</td>
                <td> {{$editar->localAviso}} </td>
                <td>{{$editar->dataRAviso}} </td>
                <td> {{$editar->participanteAviso}} </td>
                <td> {{$editar->horaAviso}}</td>
                <td>{{$editar->descricaoAviso}}</td>
            <td>
             
            </td>
        </tr>

        </tbody>
    </table>

    

</div>

</div>
@endsection