@extends('layouts.mainAdmin')

@section('title', 'AdminPage')

@section('content')

<div class="row" id="voltar">
    <a href="/Total/total" style="color: red;"> <ion-icon name="arrow-back-outline"></ion-icon></a>

</div>

<div class="container">

    <div class="row">

        <div class="col-6" id="addicionar">
            <a class="btn btn-info" href="/register">Add</a>
        </div>

        <div class="col-6">
            <div id="search">
                <form action="/Detalhes/usuarioDetalhes" method="GET">
                    <input type="text" id="search" name="search" placeholder="Pesquisar" class="form-control">
                </form>

            </div>

        </div>

    </div>


    <div class="row">

        @if($search)
        <h1>Pesquisando por: {{$search}}</h1>
        @endif

        <hr style="margin-bottom: 15px;">
        @if(count($usuarios) > 0)

        <div class="col">
            <table class="table table-light table-striped-columns">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Data Criação</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $index => $user )
                    <tr class="table-info">
                        <th>{{$usuarios->firstItem() + $index }}</th>
                        <td scope="col"> {{$user->name}} </td>
                        <td scope="col"> {{$user->email}}</td>
                        <td scope="col"> {{$user->usertype}}</td>
                        <td scope="col"> {{$user->created_at}}</td>

                        <td scope="col">
                            <form" method="post">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button class="btn btn-success">Right</button>
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><ion-icon name="create-outline"></ion-icon></button>
                                    <button class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>

                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">

                                                    <form action="">
                                                        <div class="mb-3">
                                                            <label for="name" class="col-form-label">Nome:</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="col-form-label">Email:</label>
                                                            <input type="text" class="form-control" id="email" name="email" value=" ">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="acesso" class="col-form-label">Nível de acesso:</label>
                                                            <input type="text" class="form-control" id="usertype">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button class="btn btn-primary" value="editar">Editar</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{$usuarios->links()}}
        @endif

        @if(count($usuarios)==0 && $search)
        <p> Nao foi possível Encontrar Usuário com {{$search}}. <a href="/Detalhes/usuarioDetalhes" style="color: red;">Ver todos</a></p>
        @elseif(count($usuarios)==0 )
        <p>Nao sem usuários</p>
        @endif
    </div>


</div>

@endsection