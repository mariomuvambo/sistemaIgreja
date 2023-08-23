@extends('layouts.mainAdmin')

@section('title', 'AdminPage')

@section('content')

<div class="row" id="voltar">
<a href="/Total/total"> <ion-icon name="arrow-back-outline"></ion-icon></a>
</div>

<div class="container">

    <div class="row">

     <div class="col-6" id="addicionar">
     <a class="btn btn-info" href="">Add</a>
     </div>

        <div class="col-6">
            <div id="search">
                <form action="/Detalhes/aniversariante" method="GET">
                    <input type="text" id="search" name="pesquisar" placeholder="Pesquisar" class="form-control">
                </form>

            </div>

        </div>

    </div>


    <div class="row">

        @if($pesquisar)
        <h1>Pesquisando por: {{$pesquisar}}</h1>
        @endif

        <hr style="margin-bottom: 15px;">
        @if(count($aniversariantes) > 0)

        <div class="col">
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
             <th>{{$aniversariantes->firstItem() + $index}}</th>
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
            
        </div>
        {{$aniversariantes->links()}}

        @endif

        @if(count($aniversariantes)==0 && $pesquisar)
        <p> Nao foi possível Encontrar Usuário com {{$pesquisar}}. <a href="/Detalhes/aniversariante" style="color: red;">Ver todos</a></p>
        @elseif(count($aniversariantes)==0 )
        <p>Nao sem usuários</p>
        @endif
    </div>

    
</div>

@endsection