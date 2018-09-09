<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php if(trim($__env->yieldContent('template_title'))): ?><?php echo $__env->yieldContent('template_title'); ?> | <?php endif; ?> <?php echo e(config('app.name', 'Laravel')); ?></title>

        
        <?php if(config('laravelusers.enableBootstrapCssCdn')): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(config('laravelusers.bootstrapCssCdn')); ?>">
        <?php endif; ?>
        <?php if(config('laravelusers.enableAppCss')): ?>
            <link rel="stylesheet" type="text/css" href="<?php echo e(asset(config('laravelusers.appCssPublicFile'))); ?>">
        <?php endif; ?>

        <?php echo $__env->yieldContent('template_linked_css'); ?>

        
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>;
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            <?php if(auth()->guard()->guest()): ?>
                                <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                                <li><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>
                            <?php else: ?>
                                <li><a class="nav-link" href="<?php echo e(route('users')); ?>"><?php echo app('translator')->getFromJson('laravelusers::app.nav.users'); ?></a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>

        
        <?php if(config('laravelusers.enablejQueryCdn')): ?>
            <script src="<?php echo e(asset(config('laravelusers.jQueryCdn'))); ?>"></script>
        <?php endif; ?>
        <?php if(config('laravelusers.enableBootstrapPopperJsCdn')): ?>
            <script src="<?php echo e(asset(config('laravelusers.bootstrapPopperJsCdn'))); ?>"></script>
        <?php endif; ?>
        <?php if(config('laravelusers.enableBootstrapJsCdn')): ?>
            <script src="<?php echo e(asset(config('laravelusers.bootstrapJsCdn'))); ?>"></script>
        <?php endif; ?>
        <?php if(config('laravelusers.enableAppJs')): ?>
            <script src="<?php echo e(asset(config('laravelusers.appJsPublicFile'))); ?>"></script>
        <?php endif; ?>
        <?php echo $__env->make('laravelusers::scripts.toggleText', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php echo $__env->yieldContent('template_scripts'); ?>

    </body>
</html>
