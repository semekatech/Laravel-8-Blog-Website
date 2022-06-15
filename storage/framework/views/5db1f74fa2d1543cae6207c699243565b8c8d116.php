<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Trendnews - Leading News Portal.</title>



    <!-- Stylesheet -->
    <link  href="<?php echo e(asset('css/style.css')); ?> " rel="stylesheet">
 <link  href="<?php echo e(asset('css/bootstrap.min.css')); ?> " rel="stylesheet">
  <link  href="<?php echo e(asset('css/components.css')); ?> " rel="stylesheet">
  <link  href="<?php echo e(asset('css/classy-nav.css')); ?> " rel="stylesheet">
  <link href="<?php echo e(asset('assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
   <link  href="<?php echo e(asset('css/owl.carousel.min.css')); ?> " rel="stylesheet">
    <link  href="<?php echo e(asset('css/animate.css')); ?> " rel="stylesheet">

 <link  href="<?php echo e(asset('css/magnific-popup.css')); ?> " rel="stylesheet">
</head>

<body >


    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="/" class="nav-brand"><img src="<?php echo e(asset('img/core-img/logo.png')); ?>" alt="logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                
                                   
                                   <li><a href="/">Home</a></li>
                                   <?php $__currentLoopData = \App\Models\Category::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <li><a href="/category-news/<?php echo e($category->category); ?>"><?php echo e($category->category); ?></a></li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   
                                </ul>

                                <!-- Header Add Area -->
                                
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
<?php echo $__env->yieldContent('content'); ?>

    <footer class="footer-area">
        <!-- Footer Logo -->
        <div class="footer-logo mb-100">
            <a href="index.html"><img src="<?php echo e(asset('img/core-img/logo.png')); ?>" alt="logo"></a>
        </div>
        <!-- Footer Content -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content text-center">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                   <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                        <!-- Social Info -->
                        <div class="footer-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>

                       
                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Design </i> by <a href="" target="_blank">Semeka Technologies</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo e(asset('js/jquery-2.2.4.min.js')); ?>"></script>
    <!-- Popper js -->
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo e(asset('js/plugins.js')); ?>"></script>
    <!-- Active js -->
    <script src="<?php echo e(asset('js/active.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\larablog\resources\views/layouts/layout.blade.php ENDPATH**/ ?>