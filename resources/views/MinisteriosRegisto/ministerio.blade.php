@extends('layouts.mainAdmin')

@section('title', 'Registo do Ministério')

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
  <h2 id="subtitulo">Registo do Ministério</h2>
</div>

<hr style="margin-bottom: 15px;">

<div class="container">

  <form action="/MinisteriosRegisto" method="post">

    @csrf

    <div class="row">
      <div class="col-5">
        <label>Adicionar Ministério</label>
        <input type="text" class="form-control" placeholder="Novo ministério" aria-label="novo ministério" name="novoMinisterio" id="novoMinisterio">
        @error ('novoMinisterio') <span class="text-danger" >{{$message}}</span>  @enderror
      </div>

      <!-- <div class="col-5">
        <label>Selecione o Ministerio</label><br>
        <select class="form-select form-select-md" aria-label=".form-select-sm example" name="selecioneMinisterio" id="selecioneMinisterio">
        @foreach($RegistosMinisterio as $registoMinisterio)

        <option value="{{ $registoMinisterio->novoMinisterio }}" {{ ($registoMinisterio->novoMinisterio == 'Informatica') ? 'selected' : ''}}>
          {{$registoMinisterio->novoMinisterio }}
        </option>

        @endforeach

          

        </select>
      </div> -->
    </div>

    <div class="row">
      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Finalidade</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="finalidade" id="finalidade">
        {{old('finalidade')}}
        </textarea>
        @error ('finalidade') <span class="text-danger" >{{$message}}</span>  @enderror
      </div>

      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Tarefas do responsável do Ministério</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="responsavelMinisterio" id="responsavelMinisterio">
        {{old('responsavelMinisterio')}}
        </textarea>
        @error ('responsavelMinisterio') <span class="text-danger" >{{$message}}</span>  @enderror
      </div>
    </div>

    <div class="row">
      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Tarefas do responsável adjunto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="responsavelAdjunto" id="responsavelAdjunto">
        {{old('responsavelAdjunto')}}
        </textarea>
        @error ('responsavelAdjunto') <span class="text-danger" >{{$message}}</span>  @enderror
      </div>

      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Tarefas dos sectores em geral</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="SectorGeral" id="SectorGeral">
        {{old('SectorGeral')}}
        </textarea>
        @error ('SectorGeral') <span class="text-danger" >{{$message}}</span>  @enderror
      </div>
     
    </div>


    <div class="row">
      <div class="col-5">
        <label for="exampleFormControlTextarea1" class="form-label">Sectores do Ministérios</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="SectorMinisterio" id="SectorMinisterio">
          {{old('SectorMinisterio')}}
        </textarea>
        @error ('SectorMinisterio') <span class="text-danger" >{{$message}}</span>  @enderror
      </div>

    </div>


    <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px; margin-bottom: 30px;" value="Registar Ministerio">Registar Ministerio</button>

  </form>

  #todos

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
                <th scope="col">Ações</th>
            </tr>
        </thead>


        @foreach($ministerio_registos as $registoMinisterio)
        <tbody>
 
       
  <tr class="table-primary">
                <th>{{$loop->index+ 1}}</th>
                <td scope="col">{{$registoMinisterio->novoMinisterio}} </td>
                <td scope="col">{{$registoMinisterio->selecioneMinisterio}}</td>
                <td scope="col">{{$registoMinisterio->finalidade}}</td>
                <td scope="col">{{$registoMinisterio->responsavelMinisterio}}</td>
                <td scope="col">{{$registoMinisterio->responsavelAdjunto}}</td>
                <td scope="col">{{$registoMinisterio->SectorGeral}}</td>
                <td scope="col">{{$registoMinisterio->SectorMinisterio}}</td>

                <td scope="col">
                <form action= "/MinisteriosRegisto/{{ $registoMinisterio->id}}" method="post" >
                    @csrf
                    @method('DELETE')
                    <a href="/MinisteriosRegisto/editar/{{$registoMinisterio->id}}" class="btn btn-primary">Editar</a> 
                    <button class="btn btn-danger" type="submit" style="margin-left: 10px;">Apagar</button> 
                </form>

                 </td>
            </tr>
        
        </tbody>
        @endforeach

    </table>





</div>


@endsection