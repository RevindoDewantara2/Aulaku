<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(url('css/logincok.css')); ?>">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <section class="konten">
            <img src="<?php echo e(URL::asset('images/aulaku.png')); ?>" alt="">
            <p class="p">Aula.ku yang membantu anda
                untuk mempermudah pemesanan
                tempat untuk acara anda.</p>
        </section>
        <section class="form login">
            <header>Aula.ku</header>
            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>
                <div class="error-txt"></div>
                <div class="field input">
                    <label>Nama</label>
                    <input type="text" name="name" placeholder="Enter your Email address"></input>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your Email address"></input>
                </div>
                <!-- <div class="field input">
                    <label>No Handphone</label>
                    <input type="text" name="nohandphone" placeholder="Enter your Email address"></input>
                </div> -->
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password"></input>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field input">
                    <label>Password Confirmation</label>
                    <input type="password" name="password_confirmation" placeholder="Enter your password"></input>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Register"></input>
                </div>
                <div class="link">
                    Sudah Punya Akun?
                    <a href="<?php echo e(route('login')); ?>">Sign In!</a>
                </div>
            </form>
        </section>
    </div>
</body>

</html><?php /**PATH F:\RPL\applications\aulaku\resources\views/auth/rerere.blade.php ENDPATH**/ ?>