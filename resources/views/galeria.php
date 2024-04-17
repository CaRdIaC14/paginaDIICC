<!doctype html>
<html class="no-js" lang="en">
    @include("config.config")
    @include("include.functions")
    @include("include.head")
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "cohorte2023 - DIICC UDA";
    ?>
    <body>

        <!-- Header -->
        @include("include/header")
        <!-- Header Area End -->
        <div class="overlay">
            <div class="slideshow">
                <span class="btn_cerrar">&times;</span>
                <div class="botones adelante">
                    <i class="mdi mdi-arrow-right-circle-outline">
                    </i>
                </div>
                <div class="botones atras">
                    <i class="mdi mdi-arrow-left-circle-outline"></i>
                </div>
                <img src="" alt="" id="img_slideshow">
            </div>
        </div>
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Bienvenida Cohorte 2023</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin Banner -->

        <span class = "linea"></span>
        <section class = "galerias">
            <div class="columna">
                <img src="img/galeria/img1.jpeg" alt="" data-img-mostrar="0">
                <img src="img/galeria/img2.jpeg" alt="" data-img-mostrar="1">
            </div>
            <div class="columna">
                <img src="img/galeria/img3.jpeg" alt="" data-img-mostrar="2">
                <img src="img/galeria/img4.jpeg" alt="" data-img-mostrar="3">
                
            </div>
            <div class="columna">
                <img src="img/galeria/img5.jpeg" alt="" data-img-mostrar="4">
                <img src="img/galeria/img6.jpeg" alt="" data-img-mostrar="5">
            </div>
            <div class="columna">
                <img src="img/galeria/img7.jpeg" alt="" data-img-mostrar="6">
                <img src="img/galeria/img8.jpeg" alt="" data-img-mostrar="7">
            </div>
            <div class="columna">
                <img src="img/galeria/img9.jpeg" alt="" data-img-mostrar="8">
                <img src="img/galeria/img10.jpeg" alt="" data-img-mostrar="9">
                <img src="img/galeria/img11.jpeg" alt="" data-img-mostrar="10">
            </div>

        </section>
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
        <script src="js/script.js"></script>
    </body>
</html>