@extends('layouts.mainAdmin')

@section('title', 'Dizimo')

@section('content')


<div class="row">
        @if(session('msg'))
        <script>
            swal("Congratulation", "{{session('msg')}}", "success",{
                button:'OK'
            });
        </script>
        @endif
    </div>

<div>
    <h2 id="subtitulo">Editando Dizimo</h2>
</div>

<hr style="margin-bottom: 15px;">


<div class="container">
    <form action="/dizimo/update/{{ $editar->id }}" method="POST">

        @csrf
        @method('PUT')

       

        <div class="row">

            <div class="col">
                <label for="">Data: </label>
                <input type="date" class="form-control" placeholder="Data" aria-label="Last name" name="dataDizimo" id="dataDizimo" value="{{$editar->dataDizimo}}">
            </div>

            <div class="col">
                <label for="">Valor</label>
                <input type="number" class="form-control" placeholder="Valor" aria-label="Number" name="valorDizimo" id="valorDizimo" value="{{$editar->valorDizimo}}">
            </div>


        </div>

        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricaoDizimo" id="descricaoDizimo" >{{ old('descricaoDizimo', $editar->descricaoDizimo) }}</textarea>
            </div>
        
        </div>


        <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Editar Dizimo">Editar Dizimo</button>

    </form>

    <table class="table" >
    <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead> 
    <tbody>

    <tr class="table-success">
            <th>{{$editar->id}}</th>
            <td>{{$editar->dataDizimo}}</td>
            <td>{{$editar->valorDizimo}}</td>
            <td>{{$editar->descricaoDizimo}}</td>
            <td>
             
            </td>
        </tr>

        </tbody>
    </table>


    @endsection