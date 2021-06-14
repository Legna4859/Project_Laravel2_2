<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12 margin-tb" style="font-family: 'Playfair Display', serif">
            <div class="pull-left">
                <h2>Editar LOOKUP con el id <?php echo e($lookup->id); ?></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(url("lookups")); ?>" title="Regresar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Error!</strong>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(url("lookups",$lookup->id)); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <div class="row" style="font-family: 'Playfair Display', serif">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nombre" value="<?php echo e($lookup->name); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Codigo:</strong>
                    <input type="text" name="code" class="form-control" placeholder="Codigo" value="<?php echo e($lookup->code); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo:</strong>
                    <input type="text" name="type" class="form-control" placeholder="Tipo" value="<?php echo e($lookup->type); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Posicion:</strong>
                    <input type="text" name="position" class="form-control" placeholder="Pocicion" value="<?php echo e($lookup->position); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Usuario:</strong>
                    <select name="user_id" id="">
                        <option value="1">Angel</option></select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="font-family: 'Playfair Display', serif">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/lookups/edit.blade.php ENDPATH**/ ?>