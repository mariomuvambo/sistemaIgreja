@extends('layouts.mainUser')

@section('title', 'Todos avisos')

@section('content')

<div class="container">

<div>
  <h2 id="subtitulo" style="font-family: 'Courier New', Courier, monospace;" >TODOS AVISOS</h2>
</div>

<hr style="margin-bottom: 15px;">
<div class="row" id="voltar">
<a href="/Total/total"> <ion-icon name="arrow-back-outline"></ion-icon></a>
</div>




<div id="search">
    <form action="/Modal/avisos" method="GET">
        <input type="text" id="search" name="pesquisa1" placeholder="Pesquisar" class="form-control">
    </form>

</div>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sms:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-500">
                <div class="col">

                    @foreach($avisos as $notification)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{$notification->tituloAviso}} --
                    {{$notification->localAviso}} --
                    {{$notification->dataRAviso}} --
                    {{$notification->participanteAviso}} --
                    {{$notification->horaAviso}} --
                    {{$notification->descricaoAviso}} --
                    {{$notification->created_at}}
                    </div>
                    @endforeach
                </div>
                {{$avisos->links()}}
            </div>
        </div>
    </div>
  

</div>


</div>
@endsection