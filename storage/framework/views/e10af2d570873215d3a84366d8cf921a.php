<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pussy</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/mystyle.css')); ?>">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body class="bg-light">
    <div class="container-fliud bg-dark">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark container">
          <a class="navbar-brand" href="/">Cute cats</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">cats pics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/authors">Authors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/rnd">Random cats</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
        <footer class="container text-center">
            <hr>
            <p>Footer text</p>
        </footer>
    </body>
    </html>
<?php /**PATH C:\Users\boton\Desktop\progi\Cats\resources\views/layout.blade.php ENDPATH**/ ?>