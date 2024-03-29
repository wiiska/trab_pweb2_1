<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Listagem de Pedidos'); ?>

<h3>Listagem de Skins</h3>

<form action="<?php echo e(route('pedido.search')); ?>" method="post">

    <div class="row">
        <?php echo csrf_field(); ?>
        <div class="col-4">
            <label for="">Nome da skin</label><br>
            <input type="text" name="nome" class="form-control"><br>
        </div>
        <div class="col-4" style="margin-top: 22px;">
            <button type="submit" class="btn btn-secondary"> <i class="fa-solid fa-magnifying-glass"></i> Buscar</button>
            <a href="<?php echo e(url('pedido/create')); ?>" class="btn btn-success"><i class="fa-solid fa-plus"></i> Novo</a>
        </div>
    </div>
</form>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CPF</th>
            <th>Categoria</th>
            <th>Ação</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $dados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($item->nome); ?></td>
                <td><?php echo e($item->telefone); ?></td>
                <td><?php echo e($item->cpf); ?></td>
                <td><?php echo e($item->categoria->nome ?? ''); ?></td>
                <td><a href="<?php echo e(route('pedido.edit', $item->id)); ?> "class="btn btn-outline-primary" title="Editar"><i
                            class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="<?php echo e(route('pedido.destroy', $item)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-outline-danger" title="Deletar"
                            onclick="return confirm('Deseja realmente deletar esse registro?')">
                            <i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pweb2_2024_1-main\resources\views/Pedido/list.blade.php ENDPATH**/ ?>