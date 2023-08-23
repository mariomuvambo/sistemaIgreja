<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h2 style="background-color:black; color: wheat;font-size: 20px; font-weight: bold; text-align: center;">Igreja sao João Batista</h2>
    </div>

    <hr style="margin-bottom: 15px;">

    <div style="text-align: center; font-size:20px; font-weight: bold;">DIZIMO</div>
        <table>
            <thead >
                <tr style="color: red;" >
                    <th>#</th>
                    <th >Data</th>
                    <th >Valor</th>
                    <th >Descrição</th>

                </tr>
            </thead>

            <tbody >
                @foreach($imprimirDizimo as $dizimo)
                <tr class="table-success">
                    <th>{{$loop->index + 1}}</th>
                    <td>{{$dizimo->dataDizimo}}</td>
                    <td>{{$dizimo->valorDizimo}}</td>
                    <td>{{$dizimo->descricaoDizimo}}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>


        </body>
</html>