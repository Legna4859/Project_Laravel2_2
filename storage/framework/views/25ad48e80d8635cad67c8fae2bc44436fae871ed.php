<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD LOOKUP</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(url('lookups/create')); ?>" title="Create a Lookup"> <i class="fas fa-plus-circle"></i>
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
            <th>Codigo</th>
            <th>Tipo</th>
            <th>Posicion</th>
            <th>Acciones</th>
        </tr>
        <?php $__currentLoopData = $lookups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lookup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($lookup->id); ?></td>
                <td><?php echo e($lookup->name); ?></td>
                <td><?php echo e($lookup->code); ?></td>
                <td><?php echo e($lookup->type); ?></td>
                <td><?php echo e($lookup->position); ?></td>
                <td>
                    <form action="<?php echo e(url('lookups',$lookup->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <button class="btn btn-danger"><i class="fas fa-trash fa-lg"></i></button>
                    </form>
                    <a class="btn btn-warning" href="<?php echo e(url('lookups',$lookup->id).'/edit'); ?>">
                        <i class="fas fa-edit fa-lg"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/lookups/index.blade.php ENDPATH**/ ?>