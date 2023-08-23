@extends('layouts.mainUser')

@section('title', 'detalhes do Ministério!')

@section('content')

<div class="container">

<div>
    <h2 id="subtitulo">Detalhes dos Ministerios da Igreja</h2>
</div>


<!-- detalhesMinisterio -->

<a href="/MinisteriosUser/userMinisterio" class="btn btn-info" style="margin-left: 80%;">Registar-se</a>
 
<hr style="margin-bottom: 15px;">

<table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
                <th scope="col">Ministerio</th>
                <th scope="col">Finalidade</th>
                <th scope="col">Tarefas R.M</th>
                <th scope="col">Tarefas R.ADJ</th>
                <th scope="col">Tarefas S.geral</th>
                <th scope="col">Sectores do ministerio</th>
    
            </tr>
        </thead>
        <tbody>
        
        

  @foreach($registoSelect as $registoMinisterio)


  <tr class="table-primary">
                <th>{{$loop->index+ 1}}</th>
                <td scope="col">{{$registoMinisterio->novoMinisterio}}</td>
                <td scope="col">{{$registoMinisterio->finalidade}}</td>
                <td scope="col">{{$registoMinisterio->responsavelMinisterio}}</td>
                <td scope="col">{{$registoMinisterio->responsavelAdjunto}}</td>
                <td scope="col">{{$registoMinisterio->SectorGeral}}</td>
                <td scope="col">{{$registoMinisterio->SectorMinisterio}}</td>

                <td scope="col">
                
            </tr>
           
          
        </tbody>
      
        @endforeach

    </table>

 

</div>


    
</div>
@endsection