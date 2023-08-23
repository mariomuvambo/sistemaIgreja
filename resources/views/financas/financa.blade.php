@extends('layouts.mainAdmin')

@section('title', 'Finanças')

@section('content')

<div>
    <h2 id="subtitulo" >Finanças</h2>
</div>

<hr style="margin-bottom: 15px;">
<div class="container">

<div class="row">
<div class="container overflow-hidden text-center">
  <div class="row gy-5" >
    <div class="col-6" style="background-color: #0dcaf0;">
    <!-- #20c997, #cfe2ff -->
      <div class="p-3">
      <a  href="/dizimo/dizimo" class="btn btn-outline-light" type="submit">Dizimo</a>
      </div>
    </div>
    
    <div class="col-6" style="background-color: #087990;" >
      <div class="p-3">
      <a href="/ofertas/oferta" class="btn btn-outline-light" type="submit">Oferta</a>
      </div>
    </div>
    <div class="col-6" style="background-color: #087990;">
      <div class="p-3">
      <button class="btn btn-outline-light" type="submit">Txivirica</button>
      </div>
    </div>
    <div class="col-6" style="background-color: #0dcaf0;">
      <div class="p-3">
      <button class="btn btn-outline-light" type="submit">Relatorio</button>
      </div>
    </div>
  </div>
</div>
    
</div>
</div>

 <hr style="margin-top: 10px; margin-bottom: 5px;">




@endsection