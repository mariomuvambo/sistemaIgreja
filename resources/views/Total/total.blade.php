@extends('layouts.mainAdmin')

@section('title', 'AdminPage')

@section('content')

<div class="container">


    <hr style="margin-bottom: 15px;">

    <div class="row">
        <div class="col">


            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Aniversariantes</div>
                <div class="card-body">
                    @foreach ($aniversariantes as $aniversariante)
                   
                    @endforeach
                    <h5 class="card-title" id="number">{{ $aniversariantes->count() }} </h5>
                    <a href="/Detalhes/aniversariante" style="float: right; color:red; "><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a>

                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Inscritos Ministerio</div>
                <div class="card-body">
                @foreach($userministerio as $paroquiano)
                @endforeach
                    <h5 class="card-title" id="number">{{$userministerio->count()}} </h5>
                    <a href="/Detalhes/inscritosMinisterio" style="float: right; color:red; "><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a>
                </div>
            </div>
        </div>

        <!-- <div class="col">
            <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Paroquianos</div>
                <div class="card-body">

                    <h5 class="card-title" id="number">  </h5>
                </div>
            </div>

        </div> -->
 
        <div class="col">
            <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Usuários</div>
                <div class="card-body">
                    <h5 class="card-title" id="number"> {{Auth::user()->count()}}</h5>
                    <a href="/Detalhes/usuarioDetalhes" style="float: right; color:red; "><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card text-bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Avisos</div>
                <div class="card-body">
                    <h5 class="card-title" id="number"> {{Auth::user()->Notifications->count()}}
                    </h5>
                    <a href="/Modal/avisos" style="float: right; color:red; "><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a>
                </div> 
            </div>
        </div>

        <div class="col">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Batismos</div>
                <div class="card-body">

                    <h5 class="card-title" id="number">0</h5>
                    <a href="/Detalhes/usuarioDetalhes" style="float: right; color:red; "><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a>

                </div>
            </div>
        </div>

        <div class="col">

        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header" id="adminT">Casamentos</div>
                <div class="card-body">
                    <h5 class="card-title" id="number">{{Auth::user()->casamentos->count()}} </h5> 
                    <a href="/Detalhes/casamento" style="float: right; color:red; "><ion-icon name="ellipsis-horizontal-outline"></ion-icon></a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection