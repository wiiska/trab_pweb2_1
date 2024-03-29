<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Formulário de Caixas'); ?>
<?php
    if (!empty($dado->id)) {
        $route = route('caixa.update', $dado->id);
    } else {
        $route = route('caixa.store');
    }
?>

<h3>Formulário de Caixas</h3>
<form action="<?php echo e($route); ?>" method="post">

    <?php echo csrf_field(); ?>

    <?php if(!empty($dado->id)): ?>
        <?php echo method_field('put'); ?>
    <?php endif; ?>

    <input type="hidden" name="id"
        value="<?php if(!empty($dado->id)): ?> <?php echo e($dado->id); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Nome da caixa</label><br>
    <input type="text" name="nome" class="form-control"
        value="<?php if(!empty($dado->nome)): ?> <?php echo e($dado->nome); ?><?php elseif(!empty(old('nome'))): ?><?php echo e(old('nome')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Conteudo da caixa</label><br>
    <input type="text" name="conteudo" class="form-control"
        value="<?php if(!empty($dado->conteudo)): ?> <?php echo e($dado->conteudo); ?><?php elseif(!empty(old('conteudo'))): ?><?php echo e(old('conteudo')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>

    <label for="">Preço</label><br>
    <input type="text" name="preco" class="form-control"
        value="<?php if(!empty($dado->preco)): ?> <?php echo e($dado->preco); ?><?php elseif(!empty(old('preco'))): ?><?php echo e(old('preco')); ?><?php else: ?><?php echo e(''); ?> <?php endif; ?>"><br>


    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="<?php echo e(url('caixa')); ?>" class="btn btn-primary">Voltar</a>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HenriqueLucas\resources\views/caixa/form.blade.php ENDPATH**/ ?>