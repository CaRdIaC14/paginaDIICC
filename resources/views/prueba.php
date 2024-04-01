<!doctype html>
<html class="no-js" lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "UDA - Departamento de Ingeniería Informática y Comunicación";
    include_once "config/config.php";
    include_once "include/functions.php";
    include_once "include/head.php";
?>
<meta charset="UTF-8">
<body>

    <body>
        <!-- Header -->
        <?php include_once "include/header.php"; ?>
        <!-- Header Area End -->
        <!-- Background Area Start -->
        <section id="slider-container" class="slider-area">
        <div class="slider-owl owl-theme owl-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="border:1px solid #364c59;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="border:1px solid #364c59;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="border:1px solid #364c59;"></li>
                                                              
                </ol>
                <!--<div class="slider-owl owl-theme owl-carousel">--> <!-- cambiar -->
                <!-- Start Slingle Slide -->
                <div class="carousel-inner">
                    <div class="item active" >
                        <div class="notice-left">
                            <div class="single-slide item" style="background-image: url(img/slide/img1.jpg)">
                                <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <h3>DEPARTAMENTO DE INGENIERÍA </h3>
                                                        <h2>INFORMÁTICA Y CIENCIAS DE LA COMPUTACIÓN</h2>
                                                        <p>Universidad de Atacama, Copiapó, Atacama, Chile.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                        </div>
                    </div>
                            <!-- End Slingle Slide -->
                            <!-- Start Slingle Slide -->
                    <div class="item">
                        <div class="notice-left">
                            <div class="single-slide item" style="background-image: url(img/slide/img2.jpg)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper text-left">
                                                    <div class="slide-content">
                                                        <h3>MALLA </h3>
                                                        <h2>CURRICULAR </h2>
                                                        <p>Conoce la malla de nuestra carrera </p>
                                                        <a class="default-btn" href="malla1.php">Ver malla</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                        </div>
                    </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/academicos2.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <!--<h3>PROFESORES </h3>
                                                        <h2> </h2>
                                                        <p>Conoce a nuestros profesores </p>-->
                                                        <a class="default-btn" href="academicos.php">Ver profesores</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                            <!-- End Slingle Slide -->
                        </div>
                    </div>
                </div>
                        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>-->
            </div>
        </div>
        </section>
        <!-- Background Area End -->

        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->

        
    </body>
</body>

</html>