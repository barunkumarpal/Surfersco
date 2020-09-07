<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surfers Co.</title>

    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/1f16899939.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Style link -->
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
    <link rel="stylesheet" href="all_min.css">
    
</head>
<body>
    <section class="hero bg-img">
        <div class="navbar-main">
            <div class="container-fluid">
                <div class="row align-items-center">        
                    <div class="col-md-4 logo justify-content-center d-flex">
                        <img src="img/logo.png" alt="Logo.png">
                    </div>
                    <div class="col-md-4">
                        <div class="toggle-bar text-right">
                            <i class="fas fa-bars"></i>
                        </div>
                        <nav class="main_nav navbar navbar-expand-sm">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="" class="nav-link active">Boards</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Accesories</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Technology</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">Dealers</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4 socials justify-content-center d-flex flex-wrap">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="far fa-envelope"></i></a>
                    </div>
                </div><!-- ./ row -->
            </div>
        </div> <!-- ./ navbar section -->

        <div class="desc-sec">
            <p class="heading">Ride every wave as if it's your last</p>
            <p class="desc">We love the motion of the ocean</p>
        </div><!-- ./ desc-sec -->

        <div class="product-sec">
            <?php require_once('product-slider.php'); ?>
        </div><!-- ./ product section -->        
    </section>
    <section class="about-us container-fluid">
        <p class="heading">about us</p>
        <div class="row">
            <div class="col-md-6 desc-sec">
                <div class="desc-box">
                    <p class="title">we are surfers co.</p>
                    <p class="desc">
                    Lorem ipsum dolor sit amet, aeneam consectetur adipiscing elit. Fusce iaculis feugiat arcunum fermentum hendrerit. Suspendisse auctor labor nisi, et interdum diam facilisis, aliquam pulvinar semi egetis belle sollicitudin ut. Nullam tincidun finibustus scelerisque.
                    </p>
                    <a href="" class="link">Read more</a>
                </div>
            </div>
            <div class="col-md-6 video-sec">
                <div class="video-box">
                    <div class="img">
                        <img src="img/surfers-co-abou-video.jpg" alt="">
                        <img src="img/play-button.png" alt="" class="play-button">
                    </div>
                </div>
            </div>
        </div><!-- ./ row -->
    </section>
   
   <section class="testimonial-sec container">
        <div class="swiper-container" id="swiper-container2">
            <div class="swiper-wrapper">
                <div class="swiper-slide active-slider">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>                   
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="img-sec">
                            <img src="img/surfers-co-abou-video.jpg" alt="">
                        </div>
                        <div class="desc-sec text-center">
                            <p class="title">Jhon Doe</p>
                            <p class="email">@tejas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <script src="js/jquery-3.js"></script>
    <script src="bootstrap-4/js/bootstrap.min.js"></script> 

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiper-sliders-init.js"></script>
    <script src="js/main_js.js"></script>

    <link rel="stylesheet" href="product-slider.css">
    <link rel="stylesheet" href="testimonial-slider.css">
</body>
</html>