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
                <form action="/Detalhes/casamento" method="GET">
                    <input type="text" id="search" name="pesquisa" placeholder="Pesquisar" class="form-control">
                </form>

 
            </div>

        </div>

    </div>

    <div class="row">

        @if($pesquisa)
        <h1>Pesquisando por: {{$pesquisa}}</h1>
        @endif

        <hr style="margin-bottom: 15px;">
        @if(count($casamentos) > 0)

        <div class="col">
        <table class="table table-hover"> 
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Noiva(o)</th>
                <th scope="col">Apelido Noiva(o)</th>
                <th scope="col">Nacionalidade Noiva(o)</th>
                <th scope="col">Contacto Noiva(o)</th>
                <th scope="col">Estado civil Noiva(o)</th>
                <th scope="col">Batismo Noiva(o)</th>
                <th scope="col">Local BATISMO Noiva(o)</th>
                <th scope="col">NUCLEO Noiva(o)</th>
                <th scope="col">Data de casamento</th>
                <th scope="col">Ações</th>
            </tr>

            <tr>

            </tr>
        </thead> 

        <tbody>
        @foreach($casamentos as $index =>$casar)

        <tr class="table-primary">
        <th>{{$casamentos->firstItem() + $index}}</th>
        <td>{{$casar->nome_noiva}}</th>
        <td> {{$casar->apelido_noiva}}</th>
        <td>{{  $casar->nacionalidade_noiva}}</td>
        <td> {{$casar->contacto_noiva}}</td>
        <td>{{$casar->estado_civil_noiva}}</th>
        <td>{{  $casar->batizada}}</td>
        <td> {{$casar->local_batizada}}</td>
        <td>{{ $casar->nucleo_noiva}}</td>
        <td class="table-warning">{{  $casar->data_casamento}}</td>
        <td>
        <form action="/casamento" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/casamento/editar/{{$casar->id}}" class="btn btn-primary">Editar</a>
                     
                    </form>
        </td>
        
        </tr>

        <tr class="table-secondary" >
        <th>{{$casamentos->firstItem() + $index}}</th>
        <td>{{$casar-> nome_noivo}}</td>
        <td> {{ $casar->apelido_noivo}}</td>
        <td>{{$casar-> nacionalidade_noivo}}</td>
        <td>{{  $casar->contacto_noivo}}</td>
        <td> {{$casar->estado_civil_noivo}}</td>
        <td> {{ $casar-> batizado}}</td>
        <td>{{ $casar-> local_batizado}}</td>
        <td>{{ $casar->nucleo_noivo}}</td>
        <td class="table-warning">{{  $casar->data_casamento}}</td>
        <td>
        <form action="/casamento/{{$casar->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Apagar</button>
                    </form>
        </td>

        </tr>

        @endforeach
        </tbody>
    </table>




         
        </div>
        {{$casamentos->links()}}

        @endif

        @if(count($casamentos)==0 && $pesquisa)
        <p> Nao foi possível Encontrar Usuário com {{$pesquisa}}. <a href="/Detalhes/casamento" style="color: red;">Ver todos</a></p>
        @elseif(count($casamentos)==0 )
        <p>Sem casamentos</p>
        @endif
    </div>

    
</div>

@endsection