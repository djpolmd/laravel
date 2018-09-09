<?php $__env->startSection('template_title'); ?>
  <?php echo app('translator')->getFromJson('laravelusers::laravelusers.editing-user', ['name' => $user->name]); ?>
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
                            <?php echo app('translator')->getFromJson('laravelusers::laravelusers.editing-user', ['name' => $user->name]); ?>
                            <div class="pull-right">
                                <a href="<?php echo e(route('users')); ?>" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="top" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.back-users'); ?>">
                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                        <i class="fas fa-fw fa-reply-all" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.back-to-users'); ?>
                                </a>
                                <a href="<?php echo e(url('/users/' . $user->id)); ?>" class="btn btn-light btn-sm float-right" data-toggle="tooltip" data-placement="left" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.back-users'); ?>">
                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                        <i class="fas fa-fw fa-reply" aria-hidden="true"></i>
                                    <?php endif; ?>
                                    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.back-to-user'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(array('route' => ['users.update', $user->id], 'method' => 'PUT', 'role' => 'form', 'class' => 'needs-validation')); ?>

                            <?php echo csrf_field(); ?>

                            <div class="form-group has-feedback row <?php echo e($errors->has('name') ? ' has-error ' : ''); ?>">
                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                    <?php echo Form::label('name', trans('laravelusers::forms.create_user_label_username'), array('class' => 'col-md-3 control-label'));; ?>

                                <?php endif; ?>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <?php echo Form::text('name', $user->name, array('id' => 'name', 'class' => 'form-control', 'placeholder' => trans('laravelusers::forms.create_user_ph_username'))); ?>

                                        <div class="input-group-append">
                                            <label class="input-group-text" for="name">
                                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                    <i class="fa fa-fw <?php echo e(trans('laravelusers::forms.create_user_icon_username')); ?>" aria-hidden="true"></i>
                                                <?php else: ?>
                                                    <?php echo app('translator')->getFromJson('laravelusers::forms.create_user_label_username'); ?>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group has-feedback row <?php echo e($errors->has('email') ? ' has-error ' : ''); ?>">
                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                    <?php echo Form::label('email', trans('laravelusers::forms.create_user_label_email'), array('class' => 'col-md-3 control-label'));; ?>

                                <?php endif; ?>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <?php echo Form::text('email', $user->email, array('id' => 'email', 'class' => 'form-control', 'placeholder' => trans('laravelusers::forms.create_user_ph_email'))); ?>

                                        <div class="input-group-append">
                                            <label for="email" class="input-group-text">
                                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                    <i class="fa fa-fw <?php echo e(trans('laravelusers::forms.create_user_icon_email')); ?>" aria-hidden="true"></i>
                                                <?php else: ?>
                                                    <?php echo app('translator')->getFromJson('laravelusers::forms.create_user_label_email'); ?>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php if($rolesEnabled): ?>
                                <div class="form-group has-feedback row <?php echo e($errors->has('role') ? ' has-error ' : ''); ?>">
                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                        <?php echo Form::label('role', trans('laravelusers::forms.create_user_label_role'), array('class' => 'col-md-3 control-label'));; ?>

                                    <?php endif; ?>
                                    <div class="col-md-9">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="role" id="role">
                                            <option value=""><?php echo e(trans('laravelusers::forms.create_user_ph_role')); ?></option>
                                            <?php if($roles): ?>
                                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($role->id); ?>" <?php echo e($currentRole->id == $role->id ? 'selected="selected"' : ''); ?>><?php echo e($role->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>
                                        <div class="input-group-append">
                                            <label class="input-group-text" for="role">
                                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                    <i class="<?php echo e(trans('laravelusers::forms.create_user_icon_role')); ?>" aria-hidden="true"></i>
                                                <?php else: ?>
                                                    <?php echo app('translator')->getFromJson('laravelusers::forms.create_user_label_username'); ?>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    </div>
                                    <?php if($errors->has('role')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('role')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="pw-change-container">
                                <div class="form-group has-feedback row <?php echo e($errors->has('password') ? ' has-error ' : ''); ?>">
                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                        <?php echo Form::label('password', trans('laravelusers::forms.create_user_label_password'), array('class' => 'col-md-3 control-label'));; ?>

                                    <?php endif; ?>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <?php echo Form::password('password', array('id' => 'password', 'class' => 'form-control ', 'placeholder' => trans('laravelusers::forms.create_user_ph_password'))); ?>

                                            <div class="input-group-append">
                                                <label class="input-group-text" for="password">
                                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                        <i class="fa fa-fw <?php echo e(trans('laravelusers::forms.create_user_icon_password')); ?>" aria-hidden="true"></i>
                                                    <?php else: ?>
                                                        <?php echo app('translator')->getFromJson('laravelusers::forms.create_user_label_password'); ?>
                                                    <?php endif; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group has-feedback row <?php echo e($errors->has('password_confirmation') ? ' has-error ' : ''); ?>">
                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                        <?php echo Form::label('password_confirmation', trans('laravelusers::forms.create_user_label_pw_confirmation'), array('class' => 'col-md-3 control-label'));; ?>

                                    <?php endif; ?>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <?php echo Form::password('password_confirmation', array('id' => 'password_confirmation', 'class' => 'form-control', 'placeholder' => trans('laravelusers::forms.create_user_ph_pw_confirmation'))); ?>

                                            <div class="input-group-append">
                                                <label class="input-group-text" for="password_confirmation">
                                                    <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                        <i class="fa fa-fw <?php echo e(trans('laravelusers::forms.create_user_icon_pw_confirmation')); ?>" aria-hidden="true"></i>
                                                    <?php else: ?>
                                                        <?php echo app('translator')->getFromJson('laravelusers::forms.create_user_label_pw_confirmation'); ?>
                                                    <?php endif; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php if($errors->has('password_confirmation')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6 mb-2">
                                    <a href="#" class="btn btn-outline-secondary btn-block btn-change-pw mt-3" title="<?php echo app('translator')->getFromJson('laravelusers::forms.change-pw'); ?>">
                                        <i class="fa fa-fw fa-lock" aria-hidden="true"></i>
                                        <span></span> <?php echo app('translator')->getFromJson('laravelusers::forms.change-pw'); ?>
                                    </a>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <?php echo Form::button(trans('laravelusers::forms.save-changes'), array('class' => 'btn btn-success btn-block margin-bottom-1 mt-3 mb-2 btn-save','type' => 'button', 'data-toggle' => 'modal', 'data-target' => '#confirmSave', 'data-title' => trans('laravelusers::modals.edit_user__modal_text_confirm_title'), 'data-message' => trans('laravelusers::modals.edit_user__modal_text_confirm_message'))); ?>

                                </div>
                            </div>
                        <?php echo Form::close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('laravelusers::modals.modal-save', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('laravelusers::modals.modal-delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_scripts'); ?>
    <?php echo $__env->make('laravelusers::scripts.delete-modal-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('laravelusers::scripts.save-modal-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('laravelusers::scripts.check-changed', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(config('laravelusers.tooltipsEnabled')): ?>
        <?php echo $__env->make('laravelusers::scripts.tooltips', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make(config('laravelusers.laravelUsersBladeExtended'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>