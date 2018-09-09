<?php if(session('message')): ?>
    <div class="alert alert-primary alert-dismissable">
        <h4>
            <i aria-hidden="true" class="icon fa fa-info-circle fa-fw"></i>
        </h4>
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <?php echo e(session('message')); ?>

    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <h4>
            <i aria-hidden="true" class="icon fa fa-check fa-fw"></i> Success
        </h4><?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissable" role="alert">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <h4 class="alert-heading">
            <i aria-hidden="true" class="fas fa-exclamation-triangle fa-fw"></i>
            Error
        </h4>
        <hr>
        <p class="mb-0">
            <?php echo e(session('error')); ?>

        </p>
    </div>
<?php endif; ?>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-light alert-dismissable">
        <a aria-label="close" class="close" data-dismiss="alert" href="#">&times;</a>
        <h4 class="alert-heading text-danger">
            <i aria-hidden="true" class="fas fa-exclamation-triangle fa-fw"></i>
            <strong>
                Errors
            </strong>
        </h4>
        <ul class="list-group list-group-flush">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item text-danger">
                    <?php echo e($error); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
