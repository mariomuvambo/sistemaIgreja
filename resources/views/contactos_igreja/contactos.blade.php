@extends('layouts.mainUser')

@section('title', 'contactos')

@section('content')

<div class="container">


<div class="row">

    @if(Session::has('error'))
   
    <script>
            swal("Conexão", "{{session('error')}}", "info",{
                button:'OK'
            });
        </script>
    
    @endif
    @if(Session::has('sucess'))
   

    <script>
            swal("Congratulation", "{{session('sucess')}}", "success",{
                button:'OK'
            });
        </script>
    @endif

</div>
<div>
    <h2 id="subtitulo">CONTACTOS</h2>
</div>

<hr style="margin-bottom: 15px;">

<div class="container">

    <h2 class="subtitulo1 ">Ligue-nos em caso de duvidas: </h2>

    <div class="row">
        <div class="col">
            <h1 class="subtitulo">Paroquial</h1>
        </div>

        <div class="col">
            <h1 class="subtitulo">Nome</h1>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <div class="col">
               <span class="contato" >Cell: +258 84673064</span> 
                <div class="col"> <span  class="contato" >Fax: 2324299592894</span> </div>
                <a href="#" style="color: goldenrod" class="contato">email:paroquiasaojoabatista@gmail.com</a>
            </div>

            <div class="col">
                <h1 class="subtitulo">Secretaria</h1>
                <span class="contato" >Cell: +258 84673064</span> 
                <div class="col"> <span  class="contato" >Fax: 2324299592894</span> </div>
                <a href="#" style="color: goldenrod" class="contato">Email:secretariajoabatista@gmail.com</a>

            </div>

            <div class="col">
                <div class="subtitulo">Nosso endereço</div>
                <div class="contato">Rua do Fomento</div>
                <div class="contato">Quarteirão 15</div>
                <div class="contato">Matola</div>
            </div>


        </div>

        <div class="col">
        <form action="{{ route('send.email') }}" method="post" >

            @csrf
            <div class="input-group">
                <span class="input-group-text">Nome e Apelido</span>
                <input type="text" aria-label="First name" class="form-control" name="nome" id="nome" value="{{old('nome')}}" >
              
                <input type="text" aria-label="apelido" class="form-control" name="apelido" id="apelido" value="{{old('apelido')}}">
                @error('nome') <span class="text-danger" > {{$message }}</span> @enderror
                @error('apelido') <span class="text-danger" > {{$message }}</span> @enderror 

            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" id="email" value="{{old('email')}}">

                @error('email') <span class="text-danger" > {{$message }}</span> @enderror
            </div>

            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Contato</label>
                    <input type="number" class="form-control" placeholder="Apenas um contacto" aria-label="numero" name="contacto" id="descricao" value="{{old('contacto')}}">

                    @error('contacto') <span class="text-danger" > {{$message }}</span> @enderror
                </div>

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao" id="descricao" > {{old('descricao')}} </textarea>

                @error('descricao') <span class="text-danger" > {{$message }}</span> @enderror
                
            </div>
            <button class="btn btn-outline-primary" type="submit" value="Enviar" >Enviar</button>

            </form>

        </div>
        <hr style="margin-top: 10px;">
    </div>

    <div class="col">
            <h1 style="text-align: center; margin-bottom: 100px; margin-top: 50px; color: red;">Mapa de localização</h1>
    </div>



</div>



</div>


@endsection