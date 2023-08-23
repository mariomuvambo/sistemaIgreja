<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS APLICACAO  -->
    <link rel="stylesheet" href="/css/contactos.css">
    <link rel="stylesheet" href="/css/dizimo.css">
    <link rel="stylesheet" href="/css/aniversariante.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>



    <div>
        <h2 style="background-color:black; color: wheat;font-size: 50px; font-weight: bold; text-align: center;">Igreja sao João Batista</h2>
    </div>

    <div class="row">

        <div class="col">
        <a href="/Negocio/financas" class="btn btn-danger  float-end mx-1">Voltar</a>
            <a href="/imprimir/gerarDizimo" target="_blank" class="btn btn-success float-end mx-3"> Gerar PDF</a>
        </div>
    </div>

    <hr style="margin-bottom: 15px;">

    <div class="container">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descrição</th>

                </tr>
            </thead>

            <tbody>
                @foreach($imprimirDizimo as $dizimo)
                <tr class="table-success">
                    <th>{{$loop->index + 1}}</th>
                    <td>{{$dizimo->dataDizimo}}</td>
                    <td>{{$dizimo->valorDizimo}}</td>
                    <td>{{$dizimo->descricaoDizimo}}</td>
                    
                </tr>
                @endforeach
                <tr class="table-success" style="color: red; font-weight: bold;">
                    <td>TOTAL</td>
                    <td></td>
                    
                    <td>{{ $dizimo->sum('valorDizimo') }}</td>
                    <td></td>
                    
                </tr>
            </tbody>

        </table>

    </div>

</body>

</html>