<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulário de Skins'); ?>
<?php
    if (!empty($dado->id)) {
        $route = route('skin.update', $dado->id);
    } else {
        $route = route('skin.store');
    }
?>

<h3>Formulário de Skins</h3>
<form action="<?php echo e($route); ?>" method="post">

    <?php echo csrf_field(); ?>

    <?php if(!empty($dado->id)): ?>
        <?php echo method_field('put'); ?>
    <?php endif; ?>

    <input type="hidden" name="id"
        value="<?php if(!empty($dado->id)): ?> <?php echo e($dado->id); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Raridade</label><br>
    <input type="text" name="raridade" class="form-control"
        value="<?php if(!empty($dado->raridade)): ?> <?php echo e($dado->raridade); ?><?php elseif(!empty(old('raridade'))): ?><?php echo e(old('raridade')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Cor</label><br>
    <input type="text" name="cor" class="form-control"
        value="<?php if(!empty($dado->cor)): ?> <?php echo e($dado->cor); ?><?php elseif(!empty(old('cor'))): ?><?php echo e(old('cor')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Float</label><br>
    <input type="text" name="float" class="form-control"
        value="<?php if(!empty($dado->float)): ?> <?php echo e($dado->float); ?><?php elseif(!empty(old('float'))): ?><?php echo e(old('float')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(url('skin')); ?>" class="btn btn-primary">Voltar</a>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HenriqueLucas\resources\views/skin/form.blade.php ENDPATH**/ ?>