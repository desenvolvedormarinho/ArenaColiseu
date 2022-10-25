<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

        <body>
            <a href="{{route('MainPage')}}">Pagina principal</a>
            <a href="{{route('Campo_add')}}">Adicionar</a>
        <table class="" id="" width="100%" cellspacing="0">
            <thead>
                    <tr>
                    <th>#</th>
                        <th>Nome</th>
                        <th>Tamanho</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>tamanho</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>
                <tbody>

                </tbody>
                    @foreach ($Campo as $Campo)
                    <tr>
                        <th><p>{{$Campo->id}}</p></th>
                        <th><p>{{$Campo->nome}}</p></th>
                        <th><p>{{$Campo->tamanho}}</p></th>
                        <th><a href="{{ route('Campo_edit',$Campo->id)}}">editar</a></th>
                        <th><a href="{{ route ('Campo_delete', $Campo->id)}}">delete</a></th>
                        <th><a href="{{ route ('Campo_show', $Campo->id)}}">{mostrar}</a></th>
                        <hr>
                    </tr>
            @endforeach
            </tbody>
            </table>
        </body>
</html>
