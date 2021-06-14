<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD TAG</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(url('tags/create')); ?>" title="Create a Tag"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Frecuencia</th>
            <th>Acciones</th>
        </tr>
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($tag->id); ?></td>
                <td><?php echo e($tag->name); ?></td>
                <td><?php echo e($tag->frequency); ?></td>
                <td>
                    <form action="<?php echo e(url('tags',$tag->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                    <a class="btn btn-warning" href="<?php echo e(url('tags',$tag->id).'/edit'); ?>">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/tags/index.blade.php ENDPATH**/ ?>