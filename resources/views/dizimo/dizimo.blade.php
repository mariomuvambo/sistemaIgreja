@extends('layouts.mainAdmin')

@section('title', 'Dizimo')

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
<a href="/financas/financa" class="btn-sm float-end mx-5" style="color: red;"> <ion-icon name="arrow-back-outline"></ion-icon></a>
<h2 id="subtitulo">Dizimo</h2>

</div>

<hr style="margin-bottom: 15px;">



<div class="container">

    <form action="/dizimo/dizimo" method="post">

        @csrf

        

        <div class="row">

            <div class="col">
                <label for="">Data: </label>
                <input type="date" class="form-control" placeholder="Data" aria-label="Primeiro nome" name="dataDizimo" id="dataDizimo" value="{{ old('dataDizimo')}}" >
                @error ('dataDizimo') <span class="text-danger" >{{$message}}</span>  @enderror
            </div>

            <div class="col">
                <label for="">Valor</label>
                <input type="doubleval" class="form-control" placeholder="Valor" aria-label="Number" name="valorDizimo" id="valorDizimo"value="{{ old('valorDizimo')}}" >
                @error ('dataDizimo') <span class="text-danger" >{{$message}}</span>  @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricaoDizimo" id="descricaoDizimo">{{old('descricaoDizimo')}}</textarea>
                @error ('descricaoDizimo') <span class="text-danger" >{{$message}}</span>  @enderror
            </div>
        </div>
        <button class="btn btn-outline-primary" type="submit" value="registar Dizimo">registar Dizimo</button>

    </form>

    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Valor</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($dizimos as $dizimo)
            <tr class="table-success">
                <th>{{$loop->index + 1}}</th>
                <td>{{$dizimo->dataDizimo}}</td>
                <td>{{$dizimo->valorDizimo}}</td>
                <td>{{$dizimo->descricaoDizimo}}</td>
                <td>



                    <form action="/dizimo/{{ $dizimo->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="/dizimo/editarDizimo/{{$dizimo->id}}" class="btn btn-primary"><ion-icon name="create-outline"></ion-icon></a>
                        <button class="btn btn-danger" type="submit" style="margin-left: 10px;"><ion-icon name="trash-outline"></ion-icon></button>
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>

    </table>





</div>




@endsection