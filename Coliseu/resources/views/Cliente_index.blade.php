<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

        <body>
            <a href="{{route('Cliente_add')}}">Adicionar</a>
            @foreach ($Cliente as $Cliente)
                <h1>{{$Cliente->nome}}</h1>
                <hr>
                <p>RA: {{$Cliente->ra}}</p>
                <a href="{{ route('Cliente_edit',$Cliente->id)}}">editar</a>
                <a href="{{ route ('Cliente_delete', $Cliente->id)}}">delete</a>
                <a href="{{ route ('Cliente_show', $Cliente->id)}}">{mostrar}</a>
            @endforeach
        </body>

</html>
