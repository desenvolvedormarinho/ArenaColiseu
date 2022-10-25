<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar</title>
    </head>

        <body>
            <h1>Adicionar Cliente</h1>

            <form method="POST" action="{{ route('Campo_store') }}">
            @csrf
                <a>Nome</a> <input id="nome" type="text"name="nome">
                <a>tamanho</a> <input id="tamanho" type="text" name="tamanho">
                <button type="submit">Enviar</button>
                <a href="{{route('Campo_index')}}">{Voltar}</a>
            </form>

        </body>
</html>