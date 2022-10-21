<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

        <body>

            <h1><?php echo e($aluno->nome); ?></h1>
            <hr>
            <p>RA: <?php echo e($aluno->ra); ?></p>
            <a href="<?php echo e(route('aluno')); ?>">{Voltar}</a>

        </body>
        
</html>
<?php /**PATH C:\Users\jpnak\OneDrive\Documentos\GitHub\ArenaColiseu\oprojeto\resources\views/aluno_show.blade.php ENDPATH**/ ?>