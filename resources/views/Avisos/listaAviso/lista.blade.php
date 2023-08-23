@extends('layouts.mainUser')

@section('title', 'Todos avisos')

@section('content')

<div>
  <h2 id="subtitulo">AVISOS DA SEMANA</h2>
</div>

<hr style="margin-bottom: 15px;">

<div class="container">
          
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sms:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

        <a type="button" id="marcar-todos" class="btn btn-warning" href="{{ route('allRead')}}" >Marcar Todos como Lido</a>
        <a type="button" id="#" class="btn btn-info" href="/Modal/avisos" style="float: right;">Ver todos</a>

        <br>

        @forelse (Auth::user()->unreadNotifications as $notification)
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{$notification->data['tituloAviso']}} --
          {{$notification->data['localAviso']}}  --
          {{$notification->data['dataRAviso']}} --
          {{$notification->data['participanteAviso']}} --
          {{$notification->data['horaAviso']}} --
          {{$notification->data['descricaoAviso']}} --
          {{$notification->created_at}}
          
            <a href="{{ route('marcarLido', $notification->id) }}" style="padding-left: 150px;" aria-hidden="true">&times;</a>

          </div>

          
          @empty
     
          <div class="w-full py-2 px-5 border border-yellow-500 bg-yellow-100 text-yellow-100">
        
            OBRIGADO POR SE REGISTAR AO SISTEMA!
            <p style="color: red;">  Nenhuma notificação encontrada ....</p>
          </div>
         
          @endforelse 
          
          
         
          <br>
         
        </div>

       
      </div>
    </div>
  
  </div>
 




</div>
</div>




@endsection