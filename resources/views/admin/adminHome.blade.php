@extends('layouts.mainAdmin')

@section('title', 'Page admin')

@section('content')

<div class="container">
  <div id="espaco">

 
  <div class="row">

  <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="/img/img-1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Total</h5>
        <p class="card-text">A quantidade de registos do sistema</p>
        <a href="/Total/total" class="btn btn-primary">Verificar</a>
      </div>
    </div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
      <img src="/img/oferta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Finanças</h5>
        <p class="card-text">Todos movimentos dos dízimos e ofertas incluindo relatórios</p>
        <a href="/Negocio/financas" class="btn btn-primary">Detalhes</a>
      </div>
    </div>
    </div>


<div class="col">
    <div class="card" style="width: 18rem;">
      <img src="/img/niver.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Aniversariante do Mes</h5>
        <p class="card-text">Enviar notificacao ao usuario para comparecer a missa</p>
        <a href="/Total/aniversariantes" class="btn btn-primary">Detalhes</a>
      </div>
    </div>
</div>


  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="/igreja/quem_somos" class="nav-link px-2 text-muted">About</a></li>
    </ul>
    <p class="text-center text-muted">© 2023 Company, Inc</p>
  </footer>

  </div>

</div>

</div>
</div>



@endsection