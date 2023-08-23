@extends('layouts.mainAdmin')

@section('title', 'AdminPage')

@section('content')

<div class="row" id="voltar">
<a href="/Total/total"> <ion-icon name="arrow-back-outline"></ion-icon></a>
</div>

<div class="container">

    <div class="row">

     <div class="col-6" id="addicionar">
     <a class="btn btn-info" href="/register">Add</a>
     </div>

        <div class="col-6">
            <div id="search">
                <form action="/Detalhes/inscritosMinisterio" method="GET">
                    <input type="text" id="search" name="pesquisas" placeholder="Pesquisar" class="form-control">
                </form>

            </div>

        </div>

    </div>


    <div class="row">

        @if($pesquisas)
        <h1>Pesquisando por: {{$pesquisas}}</h1>
        @endif

        <hr style="margin-bottom: 15px;">
        @if(count($inscritos) > 0)

        <div class="col">
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
            @foreach($inscritos as $index=>$ministerio)
            <tr class="table-primary">
                <th>{{$inscritos->firstItem()+$index}}</th>
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
            
        </div>
        {{$inscritos->links()}}


        @endif

        @if(count($inscritos)==0 && $search)
        <p> Nao foi possível Encontrar Usuário com {{$search}}. <a href="/Detalhes/inscritosMinisterio" style="color: red;">Ver todos</a></p>
        @elseif(count($inscritos)==0 )
        <p>Nao sem usuários</p>
        @endif
    </div>

    
</div>

@endsection