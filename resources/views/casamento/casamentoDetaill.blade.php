@extends('layouts.mainUser')

@section('title', 'Casamento')

@section('content')

<div>
<p> <a href="/casamento/casamento" class="btn btn-danger btn-sm float-end mx-2">Voltar</a></p>
  <h2 id="subtitulo">Histórico do registo do casamento</h2>

  <hr style="margin-bottom: 10px;">
  
</div>
<div class="container">
  
   

  


<div class="row">
@if(count($casamentos) > 0)

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
        @foreach($casamentos as $casar)

        <tr class="table-primary">
        <th>{{$loop->index+ 1}}</th>
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
        <th>{{$loop->index+ 1}}</th>
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

    @else
        <p>Sem Registo de casamento. Para Registar <a href="/casamento/casamento" style="color: red;">Clique aqui</a></p>
    @endif


    
</div>
</div>




@endsection