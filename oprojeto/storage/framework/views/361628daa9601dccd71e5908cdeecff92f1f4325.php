<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
    </head>

        <body>
            <h1>Editar aluno</h1>
            <form method="POST" action="<?php echo e(url('aluno_update')); ?>/<?php echo e($aluno->id); ?>">
            <?php echo csrf_field(); ?>
            <input id="ra" type="text" name="ra" value="<?php echo e($aluno->ra); ?>">
            <input id="nome" type="text"name="nome" value="<?php echo e($aluno->nome); ?>">
            <button type="submit">Editar</button>
            <a input type="button" value="Voltar" href="<?php echo e(route('aluno')); ?>"></a>
            
        </form>

        </body>
</html><?php /**PATH C:\Users\jpnak\OneDrive\Documentos\GitHub\ArenaColiseu\oprojeto\resources\views/aluno_edit.blade.php ENDPATH**/ ?>