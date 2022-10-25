<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
    </head>

        <body>
            <h1>Editar Cliente</h1>
            <form method="POST" action="{{ url('Cliente_update') }}/{{$Cliente->id}}">
            @csrf
            <input id="ra" type="text" name="ra" value="{{$Cliente->ra}}">
            <input id="nome" type="text"name="nome" value="{{$Cliente->nome}}">
            <button type="submit">Editar</button>
            <input type="button" value="Voltar" href="{{route('Cliente')}}">
            
        </form>

        </body>
</html>