@extends('layouts.mainAdmin')

@section('title', 'Registo do Ministério')

@section('content')

@if(session('msg'))
<p class="msg"> {{session('msg')}} </p>
@endif


<div>
  <h2 id="subtitulo">Editando dados do Ministério</h2>
</div>

<hr style="margin-bottom: 15px;">

<div class="container">

  <form action="/MinisteriosRegisto/update/{{ $editar->id }}" method="post">
    @csrf
        @method('PUT')

    <div class="row">
      <div class="col-5">
        <label>Adicionar Ministério</label>
        <input type="text" class="form-control" placeholder="Novo ministério" aria-label="novo ministério" name="novoMinisterio" id="novoMinisterio" value="{{$editar->novoMinisterio}}" >
      </div>

       <div class="col-5">
         <!-- <label>Selecione o Ministerio</label><br> -->
        <!-- <select class="form-select form-select-md" aria-label=".form-select-sm example" name="selecioneMinisterio" id="selecioneMinisterio">
        <option value="Liturgia" {{ $editar->selecioneMinisterio == "Liturgia"? 'selected': ''}} >Liturgia</option>
                    <option value="familia" {{ $editar->selecioneMinisterio == "familia"? 'selected': ''}}  >Da familia</option>
                    <option value="PastoralCariatativoSocial" {{ $editar->selecioneMinisterio == "PastoralCariatativoSocial"? 'selected': ' '}}  >Pastoral cariatativo-social</option>

                    <option value="administracao" {{ $editar->selecioneMinisterio == "administracao"? 'selected': ' '}}  >administração</option>
                    <option value="catequese" {{ $editar->selecioneMinisterio == "catequese"? 'selected': ''}}  >Catequese e formação permanente</option>

                    <option value="EcumenismoReligioso" {{ $editar->selecioneMinisterio == "EcumenismoReligioso"? 'selected': ''}}  >Ecumenismo e do dialogo inter-religioso</option>
                    <option value="animacaoNucleo" {{ $editar->selecioneMinisterio == "animacaoNucleo"? 'selected': ''}}  >Da animação dos núcleos</option>

        </select> --> 
      </div> 
    </div>

    <div class="row">
      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Finalidade</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="finalidade" id="finalidade">{{ old('finalidade', $editar->finalidade) }}</textarea>
      </div>

      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Tarefas do responsável do Ministério</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="responsavelMinisterio" id="responsavelMinisterio">{{ old('responsavelMinisterio', $editar->responsavelMinisterio) }}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Tarefas do responsável adjunto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="responsavelAdjunto" id="responsavelAdjunto">
        {{ old('responsavelAdjunto', $editar->responsavelAdjunto) }}
        </textarea>
      </div>

      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Tarefas dos sectores em geral</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="SectorGeral" id="SectorGeral">{{ old('SectorGeral', $editar->SectorGeral) }}</textarea>
      </div>
    </div>


    <div class="row">
      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Sectores do Ministérios</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="SectorMinisterio" id="SectorMinisterio">{{ old('SectorMinisterio', $editar->SectorMinisterio) }}</textarea>
      </div>

    </div>


    <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Editar Ministerio">Editar Ministerio</button>

  </form>

  #todos

  <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Novo Ministerio</th>
                <th scope="col">Ministerio</th>
                <th scope="col">Finalidade</th>
                <th scope="col">Tarefas R.M</th>
                <th scope="col">Tarefas R.ADJ</th>
                <th scope="col">Tarefas S.geral</th>
                <th scope="col">Sectores do ministerio</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>

  <tr class="table-primary">
                <th>{{$editar->id}}</th>
                <td scope="col">{{$editar->novoMinisterio}} </td>
                <td scope="col">{{$editar->selecioneMinisterio}}</td>
                <td scope="col">{{$editar->finalidade}}</td>
                <td scope="col">{{$editar->responsavelMinisterio}}</td>
                <td scope="col">{{$editar->responsavelAdjunto}}</td>
                <td scope="col">{{$editar->SectorGeral}}</td>
                <td scope="col">{{$editar->SectorMinisterio}}</td>

                <td scope="col">
                <form action= "/MinisteriosRegisto/{{ $editar->id}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <a href="/MinisteriosRegisto/editar/{{$editar->id}}" class="btn btn-primary">Editar</a> 
                    <button class="btn btn-danger" type="submit" style="margin-left: 10px;">Apagar</button> 
                </form>

                 </td>
            </tr>
        
        </tbody>

    </table>





</div>


@endsection