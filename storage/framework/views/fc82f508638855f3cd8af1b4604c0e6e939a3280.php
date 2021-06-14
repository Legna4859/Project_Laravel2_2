<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uso de Bootstrap</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset("css/open-iconic-bootstrap.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("css/style.css")); ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light pt-0 pb-0 ">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item bg-danger text-center" style="padding:1em 1em 1em 2em">
                <a class="navbar-brand text-white text-center justify-content-center" href="#">
                    R
                </a>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse offset-md-4" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Call Us</a>
                </li>
                <li class="nav-item numero"  >
                    <a class="nav-link" href="#" style="color:#ec4e4f;">+880.762.009</a>
                </li>
                <li class="nav-item button">
                    <a class="nav-link" href="#" style="color:#ec4e4f;">Get Started<span class="oi oi-arrow-right"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 bg-danger">
        </div>
        <div class="col-md-4 bg-danger">
        </div>
        <div class="col-md-4 bg-danger">
        </div>
        <div class="col-md-4 bg-danger">
        </div>
        <div class="col-md-4 bg-danger">
        </div>
    </div>
<div class="main-wrapper">
    <div class="slogan wow fadeInDown" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;"> <span style="color:#ec4e4f;">70% Off</span> for first 3 months</div><h1 class="main-title wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
        Digital Agency<br>
        with Excellence<br>
        Services.</h1>
    <p class="sub-title wow fadeInUp" data-wow-delay="0.9s" style="visibility: visible; text-align: justify;font-family: monospace;color: black; animation-delay: 0.9s; animation-name: fadeInUp;">
        The 3 golden rules professional graphic designer don’t <br>
        want you to know about.</p>

    <div class="container">
        <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-danger">More About Us<span class="oi oi-chevron-right"></span></button>
        </div>
        <div class="col-md-3">
            <button type="button" class="btn btn-light">Watch Video<span class="oi oi-play-circle"></span></button>
        </div>
        <div class="col-md-3">
            <img src="<?php echo e(asset("img/Group-p-1080.png")); ?>" alt="">
        </div>
        <div class="col-md-3">
        </div>
            </div>

    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <h1 style="text-align: center;font-size: 35px; color:#ec4e4f;">WHAT WE DO</h1>
            <h2 style="font-size: 25px;text-align: center;">Provide awesome customber service</h2>
        </div>
        <div class="col-md-4">

        </div>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        <div class="col-md-4 ">
        </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/bootstrap_use/index.blade.php ENDPATH**/ ?>