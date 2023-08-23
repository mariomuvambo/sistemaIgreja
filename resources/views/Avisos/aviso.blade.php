@extends('layouts.mainAdmin')

@section('title', 'Avisos')

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
        @if(session('error'))

        <script>
            swal("Falha ao enviar", "{{session('error')}}", "info",{
                button:'OK'
            });
        </script>
       
        @endif
    </div>

<div>
    <h2 id="subtitulo">AVISOS</h2>
</div>

<hr style="margin-bottom: 15px;">

<div class="container">

    <form action="/Avisos" method="POST">
 
        @csrf
        <div class="row">
            <div class="col">
                <label for="aviso">Titulo do Aviso</label>
                <input type="text" class="form-control" name="tituloAviso" id="tituloAviso" value="{{ old('tituloAviso')}}">
                @error('tituloAviso') <span class="text-danger" >{{$message}}</span>@enderror
            </div>

            <div class="col">
                <label for="">Data do Aviso</label>
                <input type="date" class="form-control" name="dataAviso" id="dataAviso" value="{{ old('dataAviso')}}">
                @error('dataAviso') <span class="text-danger" >{{$message}}</span>@enderror

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Local da Realização</label>
                <input type="text" class="form-control" name="localAviso" id="localAviso"value="{{ old('localAviso')}}">
                @error('localAviso') <span class="text-danger" >{{$message}}</span>@enderror


            </div>

            <div class="col">
                <label for="">Data da Realização </label>
                <input type="date" class="form-control" name="dataRAviso" id="dataRAviso"value="{{ old('dataRAviso')}}">
                @error('dataRAviso') <span class="text-danger" >{{$message}}</span>@enderror

            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="">Participantes</label>
                <input type="text" class="form-control" name="participanteAviso" id="participanteAviso" value="{{ old('participanteAviso')}}">
                @error('participanteAviso') <span class="text-danger" >{{$message}}</span>@enderror

            </div>

            <div class="col">
                <label for="">Hora de Realização</label>
                <input type="time" class="form-control" name="horaAviso" id="horaAviso" value="{{ old('horaAviso')}}">
                @error('horaAviso') <span class="text-danger" >{{$message}}</span>@enderror

            </div>

        </div>

        

        <div class="row">
            <div class="col">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição do aviso</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricaoAviso" id="descricaoAviso">{{ old('descricaoAviso')}}</textarea>
                @error('descricaoAviso') <span class="text-danger" >{{$message}}</span>@enderror
                
            </div>
        </div>


        <button class="btn btn-info" type="submit" value="Registar Aviso"> Registar Aviso</button>

    </form>

    <hr style="margin-top: 15px;">

    <a href="" style="color:red"> # Ver todos avisos</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Data Aviso</th>
                <th scope="col">LocalRealizacao</th>
                <th scope="col">Data Realizacao</th>
                <th scope="col">Participantes</th>
                <th scope="col">Hora de Realizacao</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach( $avisos as $avisos)
            <tr class="table-primary">
                <th>{{$loop->index+ 1}}</th>
                <td>{{$avisos->tituloAviso}}</td>
                <td> {{$avisos->dataAviso}}</td>
                <td> {{$avisos->localAviso}} </td>
                <td>{{$avisos->dataRAviso}} </td>
                <td> {{$avisos->participanteAviso}} </td>
                <td> {{$avisos->horaAviso}}</td>
                <td>{{$avisos->descricaoAviso}}</td> 
                <td>

                    <form action="/Avisos/{{ $avisos->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/Avisos/editar/{{$avisos->id}}" class="btn btn-primary">Editar</a>
                        <button class="btn btn-danger" type="submit" style="margin-left: 10px;">Apagar</button>
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 


</div>

</div>
@endsection