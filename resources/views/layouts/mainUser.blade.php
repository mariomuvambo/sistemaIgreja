<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



  <!-- CSS APLICACAO  -->
  <link rel="stylesheet" href="/css/contactos.css">
  <link rel="stylesheet" href="/css/dizimo.css">
  <link rel="stylesheet" href="/css/aniversariante.css">

  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Materialize -->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- IONICONS -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __(' São  João batista ') }}
      </h2>


      <ul class="nav nav-pills justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Igreja</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/igreja/quem_somos">Quem somos nos</a></li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Contactos</a></li> 
          </ul>
        </li>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Contactos da Igreja</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <span class="contato">Cell: +258 84673064</span>
                <div class="col"> <span class="contato">Fax: 2324299592894</span> </div>
                <a href="#" style="color: goldenrod" class="contato">email:paroquiasaojoabatista@gmail.com</a>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Ministérios</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/MinisteriosUser/userMinisterio">Inscrever-se ao Ministérios</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li><a class="dropdown-item" href="/MinisteriosUser/detalhesMinisterio">Detalhes Ministérios</a></li>
          </ul>
        </li>




        <div class="dropdown">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Secretaria</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/batismos/batismo">Batismos</a></li>
              <li><a class="dropdown-item" href="/casamento/casamento">Casamento</a></li>
              <li><a class="dropdown-item" href="/Aniversariantes/aniversariante">Aniversariante</a></li>

              <li><a class="dropdown-item" href="#">Requisições</a></li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal3">Contactos</a></li> 
            </ul>

          </li>

           <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModal3Label">Contactos da Secretaria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <span class="contato">Cell: +258 84673064</span>
                <div class="col"> <span class="contato">Fax: 2324299592894</span> </div>
                <a href="#" style="color: goldenrod" class="contato">email:secreataria@gmail.com</a>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        </div>



        <li class="nav-item">

          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
            <span class="position-absolute translate-middle badge rounded-pill bg-danger">
              {{Auth::user()->unreadNotifications->count()}}
              <span class="visually-hidden">unread messages</span>
            </span>
            Notificação

          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Avisos/listaAviso/lista">Listar</a></li>
            <hr class="dropdown-divider">
        </li>


      </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/contactos_igreja/contactos"><ion-icon name="call"></ion-icon>Contactos</a>
      </li>

      </ul>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

          @yield('content')


        </div>
      </div>

    </div>




  </x-app-layout>



  <!-- SWEETALERT
 -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    const scrollSpy = new bootstrap.ScrollSpy(document.body, {
      target: '#navbar-example'
    })
  </script>



</body>

</html>