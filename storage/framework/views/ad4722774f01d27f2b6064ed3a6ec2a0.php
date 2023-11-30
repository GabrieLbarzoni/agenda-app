<?php $__env->startSection('title', 'Agenda'); ?>

<?php $__env->startSection('content'); ?>
<div class="container ">
    <div class="col-md-6 col-md-offset-3" >
        <h1 class="text-center">Lista de Contatos</h1><br>

        <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">telefone</th>
                <th scope="col">E-mail</th>
            </tr>
        </thead>
            <tbody>
            <?php $__currentLoopData = $contatos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($contato->id); ?></th>
                    <td><?php echo e($contato->nome); ?></td>
                    <td><?php echo e($contato->telefone); ?></td>
                    <td><?php echo e($contato->email); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
</div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Users\Gabriel Lucas\Desktop\Desafio - Agenda\agenda-app\agenda-app\resources\views/welcome.blade.php ENDPATH**/ ?>