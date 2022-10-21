<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

        <body>
            <a href="{{route('aluno_add')}}">Adicionar</a>
            @foreach ($aluno as $aluno)
                <h1>{{$aluno->nome}}</h1>
                <hr>
                <p>RA: {{$aluno->ra}}</p>
                <a href="{{ route('aluno_edit',$aluno->id)}}">editar</a>
                <a href="{{ route ('aluno_delete', $aluno->id)}}">delete</a>
                <a href="{{ route ('aluno_show', $aluno->id)}}">{mostrar}</a>
            @endforeach
        </body>

</html>
