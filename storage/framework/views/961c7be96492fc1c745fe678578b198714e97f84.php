<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="font-family: 'Playfair Display', serif">
                <h2>Crear Nuevo POST </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(url("posts")); ?>" title="Regresar"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger" style="font-family: 'Playfair Display', serif">
            <strong>Error!</strong>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(url("posts")); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <div class="row" >
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" style="font-family: 'Playfair Display', serif">
                    <strong>Titulo:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Titulo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="font-family: 'Playfair Display', serif">
                <div class="form-group" style="font-family: 'Playfair Display', serif">
                    <strong>Contenido:</strong>
                    <textarea class="form-control" style="height:50px" name="content"
                              placeholder="Contenido"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" style="font-family: 'Playfair Display', serif">
                    <strong>Etiquetas:</strong>
                    <input type="text" name="tags" class="form-control" placeholder="Etiquetas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group" style="font-family: 'Playfair Display', serif">
                    <strong>Estado</strong>:</strong>
                    <input type="text" name="state" class="form-control" placeholder="Estado">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="font-family: 'Playfair Display', serif">
                <div class="form-group">
                    <strong>Usuario:</strong>
                    <select name="user_id" id="">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="font-family: 'Playfair Display', serif">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/posts/create.blade.php ENDPATH**/ ?>