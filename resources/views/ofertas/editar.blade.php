@extends('layouts.mainAdmin')

@section('title', 'Oferta')

@section('content')

<div class="row">
        @if(session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
        @endif
    </div>

<div>
    <h2 id="subtitulo">Editando oferta</h2>
</div>

<hr style="margin-bottom: 15px;">


<div class="container">
    <form action="/ofertas/update/{{ $editar->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="row">
            <div>
                <label for="">Nome do Dizimista: </label>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nome" id="nome" value="{{$editar->nome}}">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="apelido" id="apelido" value="{{$editar->apelido}}">
            </div>

        </div>

        <div class="row">

            <div class="col">
                <label for="">Data: </label>
                <input type="date" class="form-control" placeholder="Data" aria-label="Last name" name="data" id="data" value="{{$editar->data}}">
            </div>

            <div class="col">
                <label for="">Valor</label>
                <input type="number" class="form-control" placeholder="Valor" aria-label="Number" name="valor" id="valor" value="{{$editar->valor}}">
            </div>


        </div>

        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao" id="descricao">{{ old('descricao', $editar->descricao) }}</textarea>
            </div>

        </div>


        <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Editar Oderta">Editar Oferta</button>
    </form>



    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do dizimista</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
               
            </tr>
        </thead>

        <tbody>
   
        <tr class="table-primary">
            <th>{{$editar->id}}</th>
            <td>{{$editar->nome}} {{$editar->apelido}}</td>
            <td>{{$editar->data}}</td>
            <td>{{$editar->valor}}</td>
            <td>{{$editar->descricao}}</td>
            
             
    
        </tr>

    </tbody>
    </table>


    @endsection