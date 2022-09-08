<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($contato as $c)
    <h1> {{$c->idContato}} </h1>
    <p> {{$c->nome}} </p>
    {{$c->email}}
@endforeach

</body>
</html>