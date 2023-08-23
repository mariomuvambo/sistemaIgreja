@extends('layouts.mainAdmin')

@section('title', 'Inscrição!')

@section('content')
{{-- financas da igreja --}}


<div>
<a href="/home" class="btn-sm float-end mx-5" style="color: red;"> <ion-icon name="arrow-back-outline"></ion-icon></a>
    <h2 id="subtitulo" >Quantia de Arrecadação</h2>
    
</div>

<hr style="margin-bottom: 15px;">


<div class="container">


        <div class="row">
            <div class="col">
           
            <!-- <a href="/imprimir/gerarDizimo" class="btn btn-warning" target="_blank" >view</a> -->

            <div class="col">
                     <!-- <a href="/imprimir/gerarDizimo" target="_blank "class="btn btn-success btn-sm float-end mx-1"> Gerar PDF</a> -->
            </div>
            </div>

            <div class="col">
                
               
                <a href="/imprimir/imprimirDizimo"  class="btn btn-primary btn-sm float-end mx-1" >view</a>

                <a href="/imprimir/gerarDizimo" target="_blank "class="btn btn-success btn-sm float-end mx-1">PDF</a>
            </div>
        </div>


            <!-- <p>Resultado: {{ $financaOferta->count() }} </p> -->
            <hr style="margin-bottom: 15px; margin-top: 10px;">

    <div class="row">
   

        <div class="col">
        <h1 style="text-align: center; font-weight: bold; font-size: 25px;">Dizimo</h1>
            <table class="table table-warning">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Data</th> 
                        <th scope="col">Valor</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($financaDizimo as $dizimo)
                    <tr class="table-success">
                        <th>{{$dizimo->id}}</th>
                        <td>{{$dizimo->dataDizimo}}</td>
                        <td>{{$dizimo->valorDizimo}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tr style="color: red; font-weight: bold;">
                    <td >TOTAL</td>
                    <td></td>
                    <td>{{ $financaDizimo->sum('valorDizimo') }}</td>
                </tr>

            </table>

        </div>


        <div class="col">
        <h1 style="text-align: center; font-weight: bold; font-size: 25px;">Oferta</h1>
            <table class="table table-warning">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($financaOferta as $dizimo)
                    <tr class="table-success">
                        <th>{{$dizimo->id}}</th>
                        <td>{{$dizimo->data}}</td>
                        <td>{{$dizimo->valor}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tr style="color: red; font-weight: bold;">
                    <td >TOTAL</td>
                    <td></td>
                    <td>{{ $financaOferta->sum('valor') }}</td>
                </tr>
               

            </table>
           
           
        </div>
    </div>
   

</div>


@endsection