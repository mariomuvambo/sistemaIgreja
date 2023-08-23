@extends('layouts.mainUser')

@section('title', 'Casamento')

@section('content')

<div>
  <h2 id="subtitulo">Casamento</h2>
  <hr style="margin-bottom: 10px;">
</div>

<div class="container">
  <div class="row">
    <div class="col-3">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">Dados do Noiva</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">Dados da Noivo</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">Data Casamento</a>
        <a class="list-group-item list-group-item-action" href="/casamento/casamentoDetaill">Preview</a>

      </div>
    </div>
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1" style="font-weight: bold; text-transform: uppercase;color: red;">Informações do Noiva</h4>
        <p>
        <form action="/casamento" method="post">

          @csrf
          <div class="row">
            <div class="col-4">
              <label for="Nome"> Nome do Noiva</label>
              <input type="text" class="form-control" id="nome_noiva" name="nome_noiva">
            </div>

            <div class="col-4">
              <label for="Nome"> Apelido do Noiva</label>
              <input type="text" class="form-control" id="apelido_noiva" name="apelido_noiva">
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <label for="">Nacionalidade</label>
              <input type="text" class="form-control" id="nacionalidade_noiva" name="nacionalidade_noiva">
            </div>

            <div class="col-4">
              <label for="">Contacto</label>
              <input type="number" id="contacto_noiva" name="contacto_noiva" class="form-control">
            </div>
            <div class="col-4">
              <label for="">Estado Civil</label>
              <select name="estado_civil_noiva" id="estado_civil_noiva" class="form-select form-select-md" aria-label=".form-select-sm example">
                <option value="Solteira">Solteira</option>
                <option value="Casada">Casada</option>
                <option value="Divorciada">Divorciada</option>
              </select>
            </div>
          </div>

          <hr style="margin-top: 10px;">
          <hr>
          <hr>
          <hr>
          <div class="row">

            <div class="col-4">
              <label for="exampleFormControlInput1" class="form-label">Batizada?</label>
              <div class="col-1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="batizada" id="flexRadioDefault1" value="S">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                  </label>
                </div>
              </div>

              <div class="col-1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="batizada" id="flexRadioDefault1" value="N">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Nao
                  </label>
                </div>
              </div>

            </div>
            <div class="col-4">
              <label for="" class="form-label">Local do Batismo</label>
              <input type="text" class="form-control" id="local_batizada" name="local_batizada">
            </div>


            <div class="col-4">
              <label for="" class="form-label">Núcleo</label>
              <select name="nucleo_noiva" id="nucleo_noiva" class="form-select form-select-md" aria-label=".form-select-sm example">
                <option value="Nossa senhora do amparo">Nossa Senhora Do Amparo</option>
                <option value="Nossa senhora das Graças">Nossa Senhora das Graças</option>
                <option value="Sao miguel Arcanjo">Sao miguel Arcanjo</option>
              </select>
            </div>
          </div>

          <hr style="margin-top: 10px;">
          <hr>
          <hr>
          <hr style="margin-bottom: 10px;">



          </p>
          <h4 id="list-item-2" style="font-weight: bold; text-transform: uppercase;color: red;">Informações do Noivo</h4>
          <p>


          <div class="row">
            <div class="col-4">
              <label for="Nome"> Nome do Noivo</label>
              <input type="text" class="form-control" id="nome_noivo" name="nome_noivo">
            </div>

            <div class="col-4">
              <label for="Nome"> Apelido do Noiva</label>
              <input type="text" class="form-control" id="apelido_noivo" name="apelido_noivo">
            </div>

          </div>

          <div class="row">
            <div class="col-4">
              <label for="">Nacionalidade</label>
              <input type="text" class="form-control" id="nacionalidade_noivo" name="nacionalidade_noivo">
            </div>

            <div class="col-4">
              <label for="">Contacto</label>
              <input type="number" id="contacto_noivo" name="contacto_noivo" class="form-control">
            </div>
            <div class="col-4">
              <label for="">Estado Civil</label>
              <select name="estado_civil_noivo" id="estado_civil_noivo" class="form-select form-select-md" aria-label=".form-select-sm example">
                <option value="Solteiro">Solteiro</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
              </select>
            </div>
          </div>

          <hr style="margin-top: 10px;">
          <hr>
          <hr>
          <hr>
          <div class="row">

            <div class="col-4">
              <label for="exampleFormControlInput1" class="form-label">Batizado?</label>
              <div class="col-1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="batizado" id="flexRadioDefault1" value="S">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Sim
                  </label>
                </div>
              </div>

              <div class="col-1">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="batizado" id="flexRadioDefault1" value="N">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Nao
                  </label>
                </div>
              </div>

            </div>
            <div class="col-4">
              <label for="" class="form-label">Local do Batismo</label>
              <input type="text" class="form-control" id="local_batizado" name="local_batizado">
            </div>


            <div class="col-4">
              <label for="" class="form-label">Núcleo</label>
              <select name="nucleo_noivo" id="nucleo_noiva" class="form-select form-select-md" aria-label=".form-select-sm example">
                <option value="Nossa senhora do amparo">Nossa Senhora Do Amparo</option>
                <option value="Nossa senhora das Graças">Nossa Senhora das Graças</option>
                <option value="Sao miguel Arcanjo">Sao miguel Arcanjo</option>
              </select>
            </div>
          </div>
          <hr style="margin-top: 10px;">
          <hr>
          <hr>
          <hr style="margin-bottom: 10px;">


          <h4 id="list-item-3" style="font-weight: bold; text-transform: uppercase;color: red;">Informações da data do Casamento</h4>
          <p>
            <label for="data">Data do Casamento</label>
            <input type="date" id="data_casamento" name="data_casamento" class="form-control-sm-4" style="height: 30px;">
          </p>
        


          <input type="submit" class="btn btn-info" value="Registar Casamento" style="margin-top: 20px;">

          <hr style="margin: 10px;">

      

        </form>

      </div>
    </div>
  </div>

</div>


@endsection