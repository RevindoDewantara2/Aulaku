<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/punyaku.css')); ?>">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/icofont/icofont.min.css')); ?>">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/slick-carousel/slick/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/slick-carousel/slick/slick-theme.css')); ?>">


    <title>Hello, world!</title>

<body id="top">

    <header>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo e(URL::asset('images/aulaku.png')); ?>" style="width: 150px; margin-top: -10px;" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/history')); ?>">History</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/tambah')); ?>">Tambah Tempat</a></li>
                        <?php if(Auth::check()): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('/profile/'.$model->id)); ?>">Profile</a></li>
                        <form method="POST" action="<?php echo e(route('logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                this.closest('form').submit();">Logout</a></li>
                        </form>
                        <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(url('login')); ?>">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php echo $__env->yieldContent('container'); ?><?php /**PATH F:\RPL\applications\aulaku\resources\views/home/layouts/main.blade.php ENDPATH**/ ?>