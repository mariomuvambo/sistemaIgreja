@extends('layouts.mainUser')

@section('title', 'Aniversariante')

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

<div class="row">
        <div class="col-8" style="font-weight: bold; font-size: 25px; text-align: center;">Editando Aniversariante</div>
        <div class="col-4">
            <h1></h1>
        </div>
</div>


<form action="/Aniversariantes/update/{{ $editar->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
  
    <div class="row">
        <div class="col-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="nome" id="nome" value="{{ $editar->nome }} ">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Sexo</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="M">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Masculino
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="F">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Femenino
                            </label>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="data_aniversario" id="data_aniversario" value="{{ $editar->data_aniversario}}"  >
                        
                    </div>
                </div>

            </div>
            
            <div class="col">
                <input type="submit" class="btn btn-info" value="Update" style="margin-top: 20px;">
                <!-- <a href="#" style="margin-top: 20px;" class="btn btn-info">Registar</a> -->
            </div>

        </div>

        <div class="col-4">
            <label for="apelido" class="form-label">Apelido</label>
            <input type="text" class="form-control" placeholder="Apelido" aria-label="Apelido" name="apelido" value="{{$editar->apelido}}">

            <div class="col">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto do Aniversariante</label>
                    <input class="form-control" type="file" id="image" name="image">
                </div>
            </div>
        </div>
 
        
</form>
        <div class="card col-4">
            <img src="/img/foto_aniversario/{{ $editar->image}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nome: {{$editar->nome}} {{$editar->apelido}}</h5>

                <p class="card-sexo">Sexo: {{$editar->sexo}}</p>
                <p class="card-date">Data de aniversario: {{ date('d/m/y'),strtotime($editar->data_aniversario)}}</p>

                <a href="#" class="btn btn-primary">Editar</a>
                 
            </div>
        </div>
         
    </div>

    <div class="row">
        <div class="col">
            <a href="">#Todos</a>
        </div>
    </div>

</div>




@endsection