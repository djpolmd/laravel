<?php $__env->startSection('template_title'); ?>
    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.showing-all-users'); ?>
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
                <div class="col-sm-12">
                    <?php echo $__env->make('laravelusers::partials.form-status', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.showing-all-users'); ?>
                            </span>

                            <div class="btn-group pull-right btn-group-xs">
                                <?php if(config('laravelusers.softDeletedEnabled')): ?>
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>
                                        <span class="sr-only">
                                            <?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-menu-alt'); ?>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo e(route('users.create')); ?>">
                                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                    <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                                <?php endif; ?>
                                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.create-new'); ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/users/deleted">
                                                <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                                    <i class="fa fa-fw fa-group" aria-hidden="true"></i>
                                                <?php endif; ?>
                                                <?php echo app('translator')->getFromJson('laravelusers::laravelusers.show-deleted-users'); ?>
                                            </a>
                                        </li>
                                    </ul>
                                <?php else: ?>
                                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-default btn-sm pull-right" data-toggle="tooltip" data-placement="left" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.create-new'); ?>">
                                        <?php if(config('laravelusers.fontAwesomeEnabled')): ?>
                                            <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
                                        <?php endif; ?>
                                        <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.create-new'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <?php if(config('laravelusers.enableSearchUsers')): ?>
                            <?php echo $__env->make('laravelusers::partials.search-users-form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php endif; ?>

                        <div class="table-responsive users-table">
                            <table class="table table-striped table-sm data-table">
                                <caption id="user_count">
                                    <?php echo e(trans_choice('laravelusers::laravelusers.users-table.caption', 1, ['userscount' => $users->count()])); ?>

                                </caption>
                                <thead class="thead">
                                    <tr>
                                        <th><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.id'); ?></th>
                                        <th><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.name'); ?></th>
                                        <th class="hidden-xs"><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.email'); ?></th>
                                        <?php if(config('laravelusers.rolesEnabled')): ?>
                                            <th class="hidden-sm hidden-xs"><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.role'); ?></th>
                                        <?php endif; ?>
                                        <th class="hidden-sm hidden-xs hidden-md"><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.created'); ?></th>
                                        <th class="hidden-sm hidden-xs hidden-md"><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.updated'); ?></th>
                                        <th class="no-search no-sort"><?php echo app('translator')->getFromJson('laravelusers::laravelusers.users-table.actions'); ?></th>
                                        <th class="no-search no-sort"></th>
                                        <th class="no-search no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody id="users_table">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($user->id); ?></td>
                                            <td><?php echo e($user->name); ?></td>
                                            <td class="hidden-xs"><?php echo e($user->email); ?></td>
                                            <?php if(config('laravelusers.rolesEnabled')): ?>
                                                <td class="hidden-sm hidden-xs">
                                                    <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($user_role->name == 'User'): ?>
                                                            <?php $badgeClass = 'primary' ?>
                                                        <?php elseif($user_role->name == 'Admin'): ?>
                                                            <?php $badgeClass = 'warning' ?>
                                                        <?php elseif($user_role->name == 'Unverified'): ?>
                                                            <?php $badgeClass = 'danger' ?>
                                                        <?php else: ?>
                                                            <?php $badgeClass = 'dark' ?>
                                                        <?php endif; ?>
                                                        <span class="badge badge-<?php echo e($badgeClass); ?>"><?php echo e($user_role->name); ?></span>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </td>
                                            <?php endif; ?>
                                            <td class="hidden-sm hidden-xs hidden-md"><?php echo e($user->created_at); ?></td>
                                            <td class="hidden-sm hidden-xs hidden-md"><?php echo e($user->updated_at); ?></td>
                                            <td>
                                                <?php echo Form::open(array('url' => 'users/' . $user->id, 'class' => '', 'data-toggle' => 'tooltip', 'title' => trans('laravelusers::laravelusers.tooltips.delete'))); ?>

                                                    <?php echo Form::hidden('_method', 'DELETE'); ?>

                                                    <?php echo Form::button(trans('laravelusers::laravelusers.buttons.delete'), array('class' => 'btn btn-danger btn-sm','type' => 'button', 'style' =>'width: 100%;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => trans('laravelusers::modals.delete_user_title'), 'data-message' => trans('laravelusers::modals.delete_user_message', ['user' => $user->name]))); ?>

                                                <?php echo Form::close(); ?>

                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success btn-block" href="<?php echo e(URL::to('users/' . $user->id)); ?>" data-toggle="tooltip" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.show'); ?>">
                                                    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.show'); ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-info btn-block" href="<?php echo e(URL::to('users/' . $user->id . '/edit')); ?>" data-toggle="tooltip" title="<?php echo app('translator')->getFromJson('laravelusers::laravelusers.tooltips.edit'); ?>">
                                                    <?php echo app('translator')->getFromJson('laravelusers::laravelusers.buttons.edit'); ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <?php if(config('laravelusers.enableSearchUsers')): ?>
                                    <tbody id="search_results"></tbody>
                                <?php endif; ?>
                            </table>

                            <?php if($pagintaionEnabled): ?>
                                <?php echo e($users->links()); ?>

                            <?php endif; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('laravelusers::modals.modal-delete', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('template_scripts'); ?>
    <?php if((count($users) > config('laravelusers.datatablesJsStartCount')) && config('laravelusers.enabledDatatablesJs')): ?>
        <?php echo $__env->make('laravelusers::scripts.datatables', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->make('laravelusers::scripts.delete-modal-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('laravelusers::scripts.save-modal-script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(config('laravelusers.tooltipsEnabled')): ?>
        <?php echo $__env->make('laravelusers::scripts.tooltips', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php if(config('laravelusers.enableSearchUsers')): ?>
        <?php echo $__env->make('laravelusers::scripts.search-users', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make(config('laravelusers.laravelUsersBladeExtended'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>