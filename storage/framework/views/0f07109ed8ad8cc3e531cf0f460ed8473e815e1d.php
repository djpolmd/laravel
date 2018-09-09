<?php $__env->startSection('template_title'); ?>
    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.showing-user', ['name' => $user->name]); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_linked_css'); ?>
    <?php if(config('laravelusers.enabledDatatablesJs')): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(config('laravelusers.datatablesCssCDN')); ?>">
    <?php endif; ?>
    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(config('laravelusers.fontAwesomeCdn')); ?>">
    <?php endif; ?>
    <?php echo $__env->make('laravelusers::partials.styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('laravelusers::partials.bs-visibility-css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(config('laravelusers.enablePackageBootstapAlerts')): ?>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <?php echo $__env->make('laravelusers::partials.form-status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <?php echo app('translator')->getFromJson('laravelusers::laravelusers.showing-user-title', ['name' => $user->name]); ?>
                            <div class="float-right">
                                <a href="<?php echo e(route('users')); ?>" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.back-users'); ?>">
                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.back-to-users'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="text-muted text-center">
                            <?php echo e($user->name); ?>

                        </h4>
                        <?php if($user->email): ?>
                            <p class="text-center" data-toggle="tooltip" data-placement="top" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.email-user', ['user' => $user->email]); ?>">
                                <?php echo e(Html::mailto($user->email, $user->email)); ?>

                            </p>
                        <?php endif; ?>
                        <div class="row mb-4">
                            <div class="col-3 offset-3 col-sm-4 offset-sm-2 col-md-4 offset-md-2 col-lg-3 offset-lg-3">
                                <a href="/users/<?php echo e($user->id); ?>/edit" class="btn btn-block btn-md btn-warning">
                                    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.edit-user'); ?>
                                </a>
                            </div>
                            <div class="col-3 col-sm-4 col-md-4 col-lg-3">
                                <?php echo Form::open(array('url' => 'users/' . $user->id, 'class' => 'form-inline')); ?>

                                    <?php echo Form::hidden('_method', 'DELETE'); ?>

                                    <?php echo Form::button(trans('laravelusers::laravelusers.buttons.delete-user'), array('class' => 'btn btn-danger btn-md btn-block','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => 'Delete User', 'data-message' => 'Are you sure you want to delete this user?')); ?>

                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-4 col-sm-3">
                                        <strong>
                                            <?php echo app('translator')->getFromJson('laravelusers::laravelusers.show-user.id'); ?>
                                        </strong>
                                    </div>
                                    <div class="col-8 col-sm-9">
                                        <?php echo e($user->id); ?>

                                    </div>
                                </div>
                            </li>
                            <?php if($user->name): ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.show-user.name'); ?>
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            <?php echo e($user->name); ?>

                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if($user->email): ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <strong>
                                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.show-user.email'); ?>
                                            </strong>
                                        </div>
                                        <div class="col-12 col-sm-9">
                                            <?php echo e($user->email); ?>

                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if(config('laravelusers.rolesEnabled')): ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                <?php echo e(trans('laravelusers::laravelusers.show-user.labelRole')); ?>

                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user_role->name == 'User'): ?>
                                                    <?php $labelClass = 'primary' ?>
                                                <?php elseif($user_role->name == 'Admin'): ?>
                                                    <?php $labelClass = 'warning' ?>
                                                <?php elseif($user_role->name == 'Unverified'): ?>
                                                    <?php $labelClass = 'danger' ?>
                                                <?php else: ?>
                                                    <?php $labelClass = 'default' ?>
                                                <?php endif; ?>
                                                <span class="badge badge-<?php echo e($labelClass); ?>"><?php echo e($user_role->name); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <strong>
                                                <?php echo trans_choice('laravelusers::laravelusers.show-user.labelAccessLevel', 1); ?>

                                            </strong>
                                        </div>
                                        <div class="col-12 col-sm-9">
                                            <?php if($user->level() >= 5): ?>
                                                <span class="badge badge-primary margin-half margin-left-0">5</span>
                                            <?php endif; ?>
                                            <?php if($user->level() >= 4): ?>
                                                <span class="badge badge-info margin-half margin-left-0">4</span>
                                            <?php endif; ?>
                                            <?php if($user->level() >= 3): ?>
                                                <span class="badge badge-success margin-half margin-left-0">3</span>
                                            <?php endif; ?>
                                            <?php if($user->level() >= 2): ?>
                                                <span class="badge badge-warning margin-half margin-left-0">2</span>
                                            <?php endif; ?>
                                            <?php if($user->level() >= 1): ?>
                                                <span class="badge badge-default margin-half margin-left-0">1</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if($user->created_at): ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.show-user.created'); ?>
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            <?php echo e($user->created_at); ?>

                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <?php if($user->updated_at): ?>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <strong>
                                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.show-user.updated'); ?>
                                            </strong>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            <?php echo e($user->updated_at); ?>

                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('laravelusers::modals.modal-delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_scripts'); ?>
    <?php echo $__env->make('laravelusers::scripts.delete-modal-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(config('laravelusers.tooltipsEnabled')): ?>
        <?php echo $__env->make('laravelusers::scripts.tooltips', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravelusers.laravelUsersBladeExtended'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>