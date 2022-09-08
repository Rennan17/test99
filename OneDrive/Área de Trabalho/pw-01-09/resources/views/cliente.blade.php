<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($cliente as $cli)
    <h1> {{$cli->idCliente}} </h1>
    <p> {{$cli->nome}} </p>
    <p> {{$cli->dtNasc}} </p>
    <p> {{$cli->estadoCivil}} </p>
    <p> {{$cli->endereco}} </p>
    <p> {{$cli->numero}} </p>
    <p> {{$cli->complemento}} </p>
    <p> {{$cli->cep}} </p>
    <p> {{$cli->cidade}} </p>
    <p> {{$cli->estado}} </p>
    <p> {{$cli->rg}} </p>
    <p> {{$cli->cpf}} </p>
    <p> {{$cli->email}} </p>
    <p> {{$cli->fone}} </p>
    <p> {{$cli->celular}} </p>

@endforeach

</body>
</html>