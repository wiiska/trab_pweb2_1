<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulário de Pedidos'); ?>
<?php
    if (!empty($dado->id)) {
        $route = route('pedido.update', $dado->id);
    } else {
        $route = route('pedido.store');
    }
?>

<h3>Formulário de Pedidos</h3>
<form action="<?php echo e($route); ?>" method="post">

    <?php echo csrf_field(); ?>

    <?php if(!empty($dado->id)): ?>
        <?php echo method_field('put'); ?>
    <?php endif; ?>

    <input type="hidden" name="id"
        value="<?php if(!empty($dado->id)): ?> <?php echo e($dado->id); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Cliente</label><br>
    <input type="text" name="cliente" class="form-control"
        value="<?php if(!empty($dado->cliente)): ?> <?php echo e($dado->cliente); ?><?php elseif(!empty(old('cliente'))): ?><?php echo e(old('cliente')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Quantidade</label><br>
    <input type="text" name="quantidade" class="form-control"
        value="<?php if(!empty($dado->quantidade)): ?> <?php echo e($dado->quantidade); ?><?php elseif(!empty(old('quantidade'))): ?><?php echo e(old('quantidade')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Contato</label><br>
    <input type="text" name="contato" class="form-control"
        value="<?php if(!empty($dado->contato)): ?> <?php echo e($dado->contato); ?><?php elseif(!empty(old('contato'))): ?><?php echo e(old('contato')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    

    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(url('pedido')); ?>" class="btn btn-primary">Voltar</a>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HenriqueLucas\resources\views/Pedido/form.blade.php ENDPATH**/ ?>