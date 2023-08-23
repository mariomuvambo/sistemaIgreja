@extends('layouts.mainUser')

@section('title', 'Pagina Inicial')


@section('content')




<div class="card text-center">
  <div class="card-header">
    <label>Celebração das Missas</label>
  </div>
  <div class="card-body">
    <h5 class="card-title">Horário das missas</h5>
    <!-- Button trigger modal -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Horário das Missas
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h5 class="modal-title" style="font-weight: bold; font-size: 20px ; text-transform: uppercase;">Missas semanais e Dominicais </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <h2 class="fs-5" style="font-weight: bold; color: #dc3545;">Segunda a sexta-feira</h2>
            <div class="row">
              <div class="col-4">
                <p>8h- 10h </p>
                <p>15- 17H </p>
                <p>8h- 10h</p>
              </div>

              <div class="col-4">
                <p>=></p>
                <p>=></p>
                <p>=></p>
              </div>

              <div class="col-4">
                <p> confeção</p>
                <p>Segunda missa</p>
                <p>Primeira missa</p>
              </div>

              <hr>
            </div>

            <h2 class="fs-5" style="font-weight: bold; color: #dc3545;">Sábado</h2>
            <div class="row">
              <div class="col-4">
                <p>8h- 10h </p>
                <p>15- 17H </p>
                <p>8h- 10h</p>
              </div>

              <div class="col-4">
                <p>=></p>
                <p>=></p>
                <p>=></p>
              </div>

              <div class="col-4">
                <p> confeção</p>
                <p>Segunda missa</p>
                <p>Primeira missa</p>
              </div>

              <hr>
            </div>
            <h2 class="fs-5" style="font-weight: bold; color: #dc3545;">Domingo</h2>
            <div class="row">
              <div class="col-4">
                <p>8h- 10h </p>
                <p>15- 17H </p>
                <p>8h- 10h</p>
              </div>

              <div class="col-4">
                <p>=></p>
                <p>=></p>
                <p>=></p>
              </div>

              <div class="col-4">
                <p> confeção</p>
                <p>Segunda missa</p>
                <p>Primeira missa</p>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="card-footer text-body-secondary">
    4 days ago
  </div>
</div>

<div class="card text-center">
  <div class="card-header">
    <label>Ministérios</label>
  </div>
  <div class="card-body">
    <h5 class="card-title">Inscreva-se nos Mistérios</h5>
    <p class="card-text">Ao se Inscrever Ira fazer parte dos sector que gostaria de participar</p>

    <a href="/MinisteriosUser/userMinisterio" class="btn btn-primary">Inscrever-me</a>
  </div>
  <div class="card-footer text-body-secondary">
    4 days ago
  </div>
</div>


<!-- <div class="card text-center">
  <div class="card-header">
    
    Avisos
    
  </div>
  <div class="card-body">
    <h5 class="card-title">
    
      Avisos da semana</h5>
    <p class="card-text"> Avisos ocorridos durante a semana</p>
    
    <a href="/Avisos/listaAviso/lista" class="btn btn-primary">Mais detalhes</a>
  </div>
  <div class="card-footer text-body-secondary">
    4 days ago
    
  </div>
</div>


<div class="card text-center">
  <div class="card-header">
    Aniversariantes do Mes
  </div>
  <div class="card-body">
    <h5 class="card-title">Aniversariante do mes</h5>
    <p class="card-text">Ao registar a data de aniversario ..... </p>
    <a href="/Aniversariantes/aniversariante" class="btn btn-primary">Registar</a>


  </div>
  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
</div> -->


@endsection