<!doctype html>
<html class="no-js" lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "UDA - Departamento de Ingeniería Informática y Ciencias de la Computación";
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

                            <div class="single-slide item" style="background-image: url(img/slide/Coordinadores21.png)">
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
                                                        <a class="default-btn" href="academicos.php">Ver Académicos</a>
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

                    <!-- Start Slingle Slide  ENCUESTA-->
                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/EncuestaExAlumnos.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <a class="default-btn" href="https://es.surveymonkey.com/r/Y6FG8YL">Encuesta</a>
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

                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/TituloFlexible.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">

                                                        <a class="default-btn" href="https://diicc.uda.cl/noticia.php?id=19">Información</a>
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
        <!-- carrusel -->
        <div class="rowtrans">
            <div class="rowtrans-title text-center">
                <h2>NOTICIAS</h2>
            </div>                
        </div> 
         <!-- Panel de noticias -->
            
        <div class="container">
            <div class="row">            
                        
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active" style="border:1px solid #254C5A;"></li>
                        <li data-target="#myCarousel" data-slide-to="1" style="border:1px solid #254C5A;"></li>
                        <li data-target="#myCarousel" data-slide-to="2" style="border:1px solid #254C5A;"></li>
                                                              
                    </ol>

                            <!-- Diapositivas Noticias-->
                    <div class="carousel-inner">
                        <div class="item active" >
                            <div class="notice-left">
                        
                                <?php
                                    $sql = "SELECT titulo,descripcion,img_path FROM noticias ORDER BY id DESC LIMIT 1 "; //ultima se muestra primera
                                    $resultado = mysqli_query($conexion, $sql);
                                               
                                    while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                                        if (strlen($mostrar['descripcion']) > 250 ){
                                            $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                                        }
                                    ?>
                                    <a class="card mb-3" style="width: 60%; height: 400px;" <?php echo sprintf('href="https://diicc.uda.cl/noticia.php?id=29"', $mostrar['id']);?>>
                                        <div class="row pt-100 pb-105">
                                            <div class="col-md-3">                                                                                                                                        
                                                <img style="width: 200px; height: 200px;" path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="let card-body">
                                                    <h4 class="card-title"><?php echo utf8_encode($mostrar['titulo']); ?> </h4>
                                                    <p class="card-text"><?php echo utf8_encode($mostrar['descripcion']); ?></p>
                                                    <div class="d-flex flex-row justify-content-between">
                                                        <p class="card-text"><small class="text-muted"><?php echo $mostrar['fecha']; ?></small></p>
                                                            <!--<p class="card-text"><small class="text-muted"><?php# echo "correo: ",$mostrar['correo']; ?></small></p>-->
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                        <!--<hr class="solid" style="border-top: 3px solid #bbb;">-->
                                    <?php } ?>
                            </div>
                        </div>

                        <div class="item">
                            <div class="notice-left">
                        
                                <?php
                                $sql = "SELECT titulo,descripcion,img_path,correo FROM noticias WHERE id=28 LIMIT 1 "; //actualizar id y url
                                $resultado = mysqli_query($conexion, $sql);
                                   
                                while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                                    if (strlen($mostrar['descripcion']) > 250 ){
                                        $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                                    }
                                        ?>
                                    <a class="card mb-3" style="width: 60%; height: 400px;" <?php echo sprintf('href="https://diicc.uda.cl/noticia.php?id=28"', $mostrar['id']);?>>
                                        <div class="row pt-100 pb-105">
                                            <div class="col-md-3">                                                                                                                                        
                                                <img style="width: 200px; height: 200px;" path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="let card-body">
                                                    <h4 class="card-title"><?php echo utf8_encode($mostrar['titulo']); ?> </h4>
                                                    <p class="card-text"><?php echo utf8_encode($mostrar['descripcion']); ?></p>
                                                    <div class="d-flex flex-row justify-content-between">
                                                        <p class="card-text"><small class="text-muted"><?php echo $mostrar['fecha']; ?></small></p>
                                                        <!--<p class="card-text"><small class="text-muted"><?php #echo "correo: ",$mostrar['correo']; ?></small></p>-->
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                                    <!--<hr class="solid" style="border-top: 3px solid #bbb;">-->     
                        </div>
                                    
                                

                        <div class="item">
                            <div class="notice-left">
                        
                                <?php
                                $sql = "SELECT titulo,descripcion,img_path,correo FROM noticias WHERE id=27 LIMIT 1 ";  // actualizar id y url
                                $resultado = mysqli_query($conexion, $sql);
                   
                                    while ($mostrar = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {

                                        if (strlen($mostrar['descripcion']) > 250 ){
                                            $mostrar['descripcion'] = substr($mostrar['descripcion'],0, 250)."...";
                                        }
                                            ?>
                                        <a class="card mb-3" style="width: 60%; height: 400px;" <?php echo sprintf('href="https://diicc.uda.cl/noticia.php?id=27"', $mostrar['id']);?>>
                                            <div class="row pt-100 pb-105">
                                                <div class="col-md-3">                                                                                                                                        
                                                    <img style="width: 200px; height: 200px;" path="*.woff" src=<?php echo fromroot($file, $mostrar["img_path"]); ?>>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="let card-body">
                                                        <h4 class="card-title"><?php echo utf8_encode($mostrar['titulo']); ?> </h4>
                                                        <p class="card-text"><?php echo utf8_encode($mostrar['descripcion']); ?></p>
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <p class="card-text"><small class="text-muted"><?php echo $mostrar['fecha']; ?></small></p>
                                                                <!--<p class="card-text"><small class="text-muted"><?php #echo "correo: ",$mostrar['correo']; ?></small></p>-->
                                                        </div>    
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!--<hr class="solid" style="border-top: 3px solid #bbb;">-->
                                    <?php } ?>
                            </div>
                    
                        </div>
                             
                                
                    </div> <!--cierre notice-->
                        <!-- Controles Izquierda y Derecha-->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>


                </div>
            </div>
        </div>
        <!-- Notice End -->    
           
        
        
        
        <!-- Courses Area Start -->

        <div class="courses-area pt-30 pb-40 text-center">
            <div class="rowtrans">
                    <div class="rowtrans-title">
                        <h2 style = "padding: 20px">ÁREAS DE DESARROLLO</h2>
                    </div>                
            </div>
        </div>

            <div class="container">
                <div class="row" id = "card-row" style="margin-top: -50px; margin-bottom: 30px">
                    <div class="card" id= "card1">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="head">
                                    <div class="circle"></div>
                                        <div class="img">
                                            <img src="img/areas/SoftwareEngineering/img1.jpg" alt="course">
                                        </div>
                                        <div style="padding-top: 280px; font-weight: bold;">
                                            <h3 style = "font-weight: bold; color: black; ">Inteligencia de Máquinas</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description">
                                        <p>La ciencia de computación ha facilitado la creación de tecnologías con capacidades de procesamiento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- fin tarjeta 1-->

                    <div class="card" id= "card2">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="head">
                                    <div class="circle"></div>
                                        <div class="img">
                                            <img src="img/areas/ArtificialIntelligent/img1.jpg" alt="course">
                                        </div>
                                        <div style="padding-top: 280px; font-weight: bold;">
                                            <h3 style = "font-weight: bold; color: black; ">Ingeniería de Software</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description">
                                        <p>La Ingeniería de Software comprende procesos, metodologías, métodos, herramientas, y personas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- fin tarjeta 2-->

                    <div class="card" id= "card3">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="head">
                                    <div class="circle"></div>
                                        <div class="img">
                                            <img src="img/areas/GestionTI/img1.jpg" alt="course">
                                        </div>
                                        <div style="padding-top: 280px; font-weight: bold;">
                                            <h3 style = "font-weight: bold; color: black; ">Gestión TI</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description">
                                        <p>La información cada vez más valiosa en las organizaciones requiere de procesos, tecnologías y técnicas adecuadas para su procesamiento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- fin tarjeta 3-->
                </div>
            </div>

          
         <!-- Testimonial Area Start usado para noticias destacada instagram-->
        <div class="testimonial-area pt-110 pb-105 text-center">
            <div class="container tres-columnas">
                    <div class="row">
                        <!--<div class="testimonial-owl owl-theme owl-carousel">-->
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="single-testimonial col-md-6"><!--cambios-->
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="img/academicos/robots.jpg" alt="academicos">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>ROBÓTICA EDUCATIVA</h4>
                                            <p>Talleres de Robótica diseñados para el acercamiento hacia la programación, el análisis y solución de
                                                problemáticas desafiantes.
                                            </p> 
                                            <p>Es un campo de la ingeniería y la ciencia que se centra en el diseño, construcción y operación
                                                de robots. </p>
                                        
                                        </div>
                                    </div>
                                    
                                
                                </div>
                                <div class="single-testimonial col-md-6"><!--cambios-->
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="img/academicos/code.jpg" alt="academicos">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>Code Club UDA</h4>
                                            <p>Code Club UDA versión 2023 con alumnado de COANIL</p> 
                                            <p>Iniciativa que impulsa el departamento de Ingeniería en Informática y Ciencias de la 
                                            Computación desde el año 2014, para educar a escolares en lenguaje de programación</p>
                                        
                                        </div>
                                    </div>
                                    
                                
                                </div>
                            
                            </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>

        <!--Admision-->

        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>ADMISIÓN 2024</h2>
                </div>                
            </div>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/IDjY341K8Wg?si=MjzCRre_oM4r4Rz_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </div>

        <!--7 consejos-->

        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>7 CONSEJOS PARA POTENCIAR TUS ESTUDIOS</h2>
                </div>                
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gfGYPyeZ_qY?si=U_wvWEwK3iw0PfFE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            

        </div>

        <!-- IA-->
        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>LA IA Y SU IMPACTO EN LA SOCIEDAD</h2>
                </div>                
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yjPClOYcAsI?si=TfAkZlQb7WynAlbm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            

        </div>

        <!-- Event Area Start -->
        <div class="event-area one text-center pt-140 pb-50" id="eventos">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>PRÓXIMOS EVENTOS</h2>
                </div>                
            </div>
            
            <div class="container">
               
                <div class="row">
                    <?php
                        date_default_timezone_set('UTC');
                        setlocale(LC_ALL, 'ES');
                        $sql = "SELECT * FROM eventos WHERE fecha > CURDATE() ORDER BY id ASC LIMIT 6"; // eventos
                        $resultado = mysqli_query($conexion, $sql);
                        $i = 0;
                        $data = array();
                        while ($mostrar = mysqli_fetch_array($resultado)){
                           
                            #$mostrar['fecha'] = new DateTime($mostrar['fecha']);
                            $mostrar['hora_inicio'] = new DateTime($mostrar['hora_inicio']);
                            $mostrar['hora_termino'] = new DateTime($mostrar['hora_termino']);
                            array_push($data, $mostrar);
                        }

                    ?>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <?php 
                        foreach(array_slice($data, 0 ,count($data)/2) as $m){ 
                            echo sprintf(
                                '
                                <div class="single-event mb-35">
                                    <div class="event-date">
                                        <h3><a>%s<span>%s</span></a></h3>
                                    </div>
                                    <div class="event-content text-left">
                                        <div class="event-content-left">
                                            <h4><a href="http://www.diicc.uda.cl/noticias.php">%s</a></h4>
                                            <ul>
                                                <li><i class="bi bi-clock-fill"></i>%s - %s</li>
                                                <li><i class="bi bi-pin-map-fill"></i>%s</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ',
                                strftime('%d',strtotime ($m['fecha'])),
                                strftime('%B',strtotime($m['fecha'])),
                                utf8_encode($m['nombre']),
                                $m['hora_inicio']->format('H:i'),
                                $m['hora_termino']->format('H:i'),
                                utf8_encode($m['lugar'])
                            );
                        }
                        ?>
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                    <?php 
                        foreach(array_slice($data,count($data)/2) as $m){
                            echo sprintf(
                                '
                                <div class="single-event mb-35">
                                    <div class="event-date">
                                        <h3><a>%s<span>%s</span></a></h3>
                                    </div>
                                    <div class="event-content text-left">
                                        <div class="event-content-left">
                                            <h4><a href="http://www.diicc.uda.cl/noticias.php">%s</a></h4>
                                            <ul>
                                                <li><i class="bi bi-clock-fill"></i>%s - %s</li>
                                                <li><i class="bi bi-pin-map-fill"></i>%s</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ',
                                strftime('%d',strtotime($m['fecha'])),
                                strftime('%B',strtotime($m['fecha'])),
                                utf8_encode($m['nombre']),
                                $m['hora_inicio']->format('H:i'),
                                $m['hora_termino']->format('H:i'),
                                utf8_encode($m['lugar'])
                            );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Area End -->
        
         <!-- Blog Area Start ultimas publicaciones-->
         <div class="rowtrans">
            <div class="rowtrans-title text-center">
                <h2>ÚLTIMAS PUBLICACIONES Y TÉSIS</h2>
            </div>                
        </div> 
         <div class="blog-area pt-50 pb-50">
            <div class="container">
                
                <div class="row">
                <?php
                        $sql = "SELECT p.*, f.Nombre AS autor FROM publicaciones AS p INNER JOIN funcionarios AS f ON p.id_academico = f.id ORDER BY fecha DESC LIMIT 3"; // mejorar query falta nombre del que subio la noticia
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){
                            echo sprintf(
                                '
                                <div class="col-md-4 col-sm-6 col-xs-12" >
                                    <div class="single-blog" >
                                        <div class="blog-img" >
                                            <a href="%s"><img src="%s" alt="blog"></a>
                                            <div class="blog-hover">
                                                <a href="%s"><i class="fa fa-link"></i></a>
                                            </div>
                                        </div>
                                        <div class="blog-content" ">
                                            <div class="blog-top">
                                                <p>Escrito por %s / %s</p>
                                            </div>
                                            <div class="blog-bottom">
                                                <h2><a href="%s">%s</a></h2>
                                                <a href="%s">Leer más...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ',
                                $mostrar['acceso'],
                                fromroot($file, $mostrar["img_path"], true),
                                utf8_encode($mostrar['acceso']),
                                utf8_encode($mostrar['autor']),
                                $mostrar['fecha'],
                                $mostrar['acceso'],
                                utf8_encode($mostrar['titulo']),
                                $mostrar['acceso']
                            );
                        }

                    ?>
                    
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        


        <!-- FOOTER -->
        <?php include_once "include/footer.php"; ?>
        <!-- FOOTER -->

        
    </body>

</html>