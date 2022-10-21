<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar</title>
    </head>

        <body>
            <h1>Adicionar Aluno</h1>

            <form method="POST" action="<?php echo e(route('aluno_store')); ?>">
            <?php echo csrf_field(); ?>
                <a>RA</a> <input id="ra" type="text" name="ra">
                <a>Nome</a> <input id="nome" type="text"name="nome">
                <button type="submit">Enviar</button>
                <a href="<?php echo e(route('aluno')); ?>">{Voltar}</a>
            </form>

        </body>
</html><?php /**PATH C:\Users\jpnak\OneDrive\Documentos\GitHub\ArenaColiseu\oprojeto\resources\views/aluno_add.blade.php ENDPATH**/ ?>