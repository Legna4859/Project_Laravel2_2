<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" style="font-family: 'Playfair Display', serif">
                <h2>CRUD POST </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(url("posts/create")); ?>" title="Create a POST"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg" style="font-family: 'Playfair Display', serif">
        <tr>
                <th>No</th>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Etiquetas</th>
                <th>Estatus</th>
                <th>Usuario</th>
                <th>Acciones</th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->id); ?></td>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e($post->content); ?></td>
                <td><?php echo e($post->tags); ?></td>
                <td><?php echo e($post->state); ?></td>
                
                <td><?php echo e($post->name); ?></td>
                <td>
                    <form action="<?php echo e(url("posts",$post->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                    <a class="btn btn-warning" href="<?php echo e(url("posts",$post->id)."/edit"); ?>">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                    <a class="btn btn-dark" href="<?php echo e(url("posts",$post->id)); ?>"  method="POST">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>

                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/posts/index.blade.php ENDPATH**/ ?>