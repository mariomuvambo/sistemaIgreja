@extends('layouts.mainAdmin')

@section('title', 'Aniversariantes')

@section('content')


<div>
<!-- <a href="/home" class="btn btn-danger btn-sm float-end mx-2">Voltar</a> -->
<a href="/home" class="btn-sm float-end mx-5" style="color: red;"> <ion-icon name="arrow-back-outline"></ion-icon></a>
    <h2 id="subtitulo"> <b>Todos Aniversariantes</b></h2>
</div>
<hr style="margin-bottom: 15px;">


<div class="container">


   
    <form action="/Total" method="get">

        <div class="row pb-3">

            <div class="col-md-5 pt-4">
                <a href="/Aniversariantes/aniversariante" class="btn btn-primary">Adicionar Aniversariante</a>
            </div> 

            <div class="col-md-3">
                <label for="">Data Inicio</label>
                <input type="date" name="dataInicio" id="dataInicio" class="form-control">
            </div>

            <div class="col-md-3">
                <label for="">Data fim</label>
                <input type="date" name="dataFim" id="dataFim" class="form-control">
            </div>

            <div class="col-md-1 pt-4">
                <label for=""></label>
                <button type="submit" class="btn btn-info" name="filtrar"> filtrar</button>
            </div>
        </div>
    </form>

    <hr style="margin-bottom: 15px;">

    <p style="color: red; font-size: 30px;"> TOTAL: {{$aniversariantes->count()}}</p>

    @if(count($aniversariantes) > 0)

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do dizimista</th>
                <th scope="col">Sexo</th>
                <th scope="col">Data Aniversario</th>
                <th scope="col">Data Created</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
    @foreach($aniversariantes as $index =>$niver)
        <tr class="table-primary">
            <th>{{$aniversariantes->firstItem() +$index}}</th>
            <td>{{$niver->nome}} {{$niver->apelido}}</td>
            <td>{{$niver->sexo}}</td>
            <td>{{$niver->data_aniversario}}</td>
            <td>{{$niver->created_at}}</td>
            <td>
            <form action="/Aniversariantes/{{ $niver->id}}" method="post">
                    @csrf
                    @method('DELETE')
                  
                    <a href="/Aniversariantes/editar/{{$niver->id}}" class="btn btn-primary">Editar</a>
                    <button class="btn btn-danger" style="margin-left: 10px;" type="submit">Apagar</button>
                    <a href="/Aniversariantes/editar/{{$niver->id}}" class="btn btn-info">Avisar</a>
                </form>
             
            </td>
        </tr>
    @endforeach

    </tbody>
    </table>
    {{$aniversariantes->links()}}

    @else
    <div class="row">
        <div class="col">
            <h1 style="color: red;"># SEM ANIVERSARIANTES</h1>
        </div>
    </div>

    @endif

</div>


@endsection