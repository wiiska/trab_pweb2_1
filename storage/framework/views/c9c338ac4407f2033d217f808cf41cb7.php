<?php $__env->startSection('conteudo'); ?>
<?php $__env->startSection('titulo', 'Página Inícial'); ?>


<img src="<?php echo e(asset('images/loja.png')); ?>" style="width:200px;height:200px;">
<center><h1 style="margin-top: -140px">Skin Masters</h1></center>

<div class="row g-1">
    <div class="col-3 card text-center" style="margin: 29px;">
        <img src="<?php echo e(asset('images/pedido.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="<?php echo e(url("pedido")); ?>" class="btn btn-outline-secondary">Realizar pedido</a><br>
        </div>
    </div>
    <div class="col-3 card text-center" style="margin: 29px;">
        <img src="<?php echo e(asset('images/skin.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="<?php echo e(url("skin")); ?>" class="btn btn-outline-secondary">Cadastrar skin</a><br>
        </div>
    </div>
    <div class="col-3 card text-center" style="margin: 29px;">
        <img src="<?php echo e(asset('images/caixa.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="<?php echo e(url("caixa")); ?>" class="btn btn-outline-secondary">Cadastrar caixa</a><br>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\HenriqueLucas\resources\views/welcome.blade.php ENDPATH**/ ?>