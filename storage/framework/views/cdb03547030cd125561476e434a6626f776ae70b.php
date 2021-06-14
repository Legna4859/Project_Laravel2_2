<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar COMMENT con el id<?php echo e($comment->id); ?></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(url('comments')); ?>" title="Regresar"> <i class="fas fa-backward "></i> </a>
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
    <form action="<?php echo e(url('comments')); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contenido:</strong>
                    <input type="text" name="content" class="form-control" placeholder="Contenido" value="<?php echo e($comment->content); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="state" class="form-control" placeholder="Estado" value="<?php echo e($comment->state); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Autor:</strong>
                    <input type="text" name="author" class="form-control" placeholder="Autor" value="<?php echo e($comment->author); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="Email" name="email" class="form-control" placeholder="Email" value="<?php echo e($comment->email); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>URL:</strong>
                    <input type="url" name="url" class="form-control" placeholder="URL" value="<?php echo e($comment->url); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID_POST:</strong>
                    <input type="post_id" name="post_id" class="form-control" placeholder="POST" value="<?php echo e($comment->post_id); ?>">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="font-family: 'Playfair Display', serif">
                <div class="form-group">
                    <strong>Usuario:</strong>
                    <select name="user_id" id="">
                        <option value="1">Angel</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/comments/edit.blade.php ENDPATH**/ ?>