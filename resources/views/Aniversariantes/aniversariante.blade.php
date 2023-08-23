@extends('layouts.mainUser')

@section('title', 'Aniversariante')

@section('content')


<div class="container">


    <div class="row">
        @if(session('msg'))
        <script>
            swal("Congratulation", "{{session('msg')}}", "success", {
                button: 'OK'
            });
        </script>
        @endif
    </div>


    <div>
        <h2 id="subtitulo">Registo do aniversariante</h2>
    </div>

    <hr style="margin-bottom: 15px;">

    <form action="/Aniversariantes" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="container">

            <div class="row">
                <div class="col-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="nome" id="nome" value="{{old('nome')}}">
                    @error('nome') <span class="text-danger" >{{$message}}</span>@enderror

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
                            @error('sexo') <span class="text-danger" >{{$message}}</span>@enderror
                        </div>

                        <div class="col">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" placeholder="Primeiro nome" aria-label="Primeiro nome" name="data_aniversario" id="data_aniversario" value="{{old('data_aniversario') }}">
                                @error('data_aniversario') <span class="text-danger" >{{$message}}</span>@enderror
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <input type="submit" class="btn btn-info" value="Registar" style="margin-top: 20px;">
                        <!-- <a href="#" style="margin-top: 20px;" class="btn btn-info">Registar</a> -->
                    </div>

                </div>

                <div class="col-4">
                    <label for="apelido" class="form-label">Apelido</label>
                    <input type="text" class="form-control" placeholder="Apelido" aria-label="Apelido" name="apelido" value="{{old('apelido') }}">
                    @error('apelido') <span class="text-danger" >{{$message}}</span>@enderror
                    <div class="col">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto do Aniversariante</label>
                            <input class="form-control" type="file" id="image" name="image" value="{{old('image')}}">
                            @error('image') <span class="text-danger" >{{$message}}</span>@enderror


                        </div>
                    </div>
                </div>

    </form>

    @if(count($aniversariantes) > 0)
    @foreach($aniversariantes as $aniversariantes)
    <div class="card col-4">
        <img src="/img/foto_aniversario/{{ $aniversariantes->image}}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">Nome: {{$aniversariantes->nome}} {{$aniversariantes->apelido}}</h5>
            <p class="card-sexo">Sexo: {{$aniversariantes->sexo}}</p>
            <p class="card-date">Data de aniversario: {{$aniversariantes->data_aniversario}}</p>
            <!-- <a href="/Aniversariantes/{{$aniversariantes->id}}" class="btn btn-info">Detalhes</a> -->
            <form action="/Aniversariantes/{{ $aniversariantes->id}}" method="post" onsubmit="return submitForm(this)">
                @csrf
                @method('DELETE')
                <!-- <a href="#" type="submit" class="btn btn-danger"> Apagar</a> -->
                <a href="/Aniversariantes/editar/{{$aniversariantes->id}}" class="btn btn-primary"><ion-icon name="create-outline"></ion-icon></a>
                <button class="btn btn-danger" style="margin-left: 10px;" type="submit"><ion-icon name="trash-outline"></button>
            </form>
        </div>
    </div>
    @endforeach 
    @else

    <div class="card col-4">
        <p style="color: red;"> Ainda nao registou nenhum aniversario</p>
    </div>

    @endif

    #todo
</div>


<script>
    function submitForm(form) {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((isOkay) => {
                if (isOkay) {
                    form.submit();
                }
            });

        return false;
    }
</script>


@endsection