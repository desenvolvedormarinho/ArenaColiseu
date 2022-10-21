<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

        <body>
            <a href="<?php echo e(route('aluno_add')); ?>">Adicionar</a>
            <?php $__currentLoopData = $aluno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h1><?php echo e($aluno->nome); ?></h1>
                <hr>
                <p>RA: <?php echo e($aluno->ra); ?></p>
                <a href="<?php echo e(route('aluno_edit',$aluno->id)); ?>">editar</a>
                <a href="<?php echo e(route ('aluno_delete', $aluno->id)); ?>">delete</a>
                <a href="<?php echo e(route ('aluno_show', $aluno->id)); ?>">{mostrar}</a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </body>

</html>
<?php /**PATH C:\Users\jpnak\OneDrive\Documentos\GitHub\ArenaColiseu\oprojeto\resources\views/aluno_index.blade.php ENDPATH**/ ?>