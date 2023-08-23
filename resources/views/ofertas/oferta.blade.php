@extends('layouts.mainAdmin')

@section('title', 'Oferta')

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
<a href="/financas/financa" class="btn-sm float-end mx-5" style="color: red;"> <ion-icon name="arrow-back-outline"></ion-icon></a>
    <h2 id="subtitulo">Oferta</h2>
</div>

<hr style="margin-bottom: 15px;">


<div class="container">

<form action="/ofertas/oferta" method="post">

@csrf

    <div class="row">
        <div>
            <label for="Nome">Nome: </label>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="First name" name="nome" id="nome"  value="{{old('nome')}}">
            @error ('nome') <span class="text-danger" >{{$message}}</span>  @enderror 
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Apelido" aria-label="Last name" name="apelido" id="apelido"  value="{{old('data')}}">
            @error ('apelido') <span class="text-danger" >{{$message}}</span>  @enderror
        </div>

    </div>

    <div class="row">

    <div class="col">
        <label for="">Data: </label>
        <input type="date" class="form-control" placeholder="Data" aria-label="Last name" name="data" id="data" value="{{old('data')}}" >
        @error ('data') <span class="text-danger" >{{$message}}</span>  @enderror
    </div>

    <div class="col">
        <label for="">Valor</label>
        <input type="doubleval" class="form-control" placeholder="Valor" aria-label="Number" name="valor" id="valor" value="{{old('valor')}}" >  
        @error ('valor') <span class="text-danger" >{{$message}}</span>  @enderror
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao" id="descricao">
            {{old('descricao')}}
        </textarea>
        @error ('descricao') <span class="text-danger" >{{$message}}</span>  @enderror
    </div>
    </div>
    <button class="btn btn-outline-primary" type="submit"  value="oferecer">Oferecer</button>

    </form>

    #todo


    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do dizimista</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
    @foreach($ofertas as $ofertas)
        <tr class="table-primary">
            <th>{{$loop->index+ 1}}</th>
            <td>{{$ofertas->nome}} {{$ofertas->apelido}}</td>
            <td>{{$ofertas->data}}</td>
            <td>{{$ofertas->valor}}</td>
            <td>{{$ofertas->descricao}}</td>
            <td>
           


                <form action= "/ofertas/{{ $ofertas->id}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <a href="/ofertas/editar/{{$ofertas->id}}" class="btn btn-primary">Editar</a> 
                    <button class="btn btn-danger" type="submit" style="margin-left: 10px;">Apagar</button> 
                 </form>

             
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
   


</div>






@endsection