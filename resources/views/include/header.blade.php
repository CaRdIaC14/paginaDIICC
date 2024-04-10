<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="http://www.moodle.uda.cl/" target="_blank">Moodle</a></li>
                            <li><a href="http://www.alumnos.uda.cl/" target="_blank">Intranet</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="header-top-right text-right">
                        <ul>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeuu1sPGDU3e2R0Tz8ja5oUdVX0PBNcYaj-aiErw89I4rr56w/viewform?embedded=true" target="_blank">Sugerencias</a></li>
                            <li><a href="https://admision.uda.cl/index.php/ingenieria-civil-en-computacion-e-informatica/" target="_blank">Admisión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area header-sticky fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-16">
                    <div class="logo">
                        <a href="https://uda.cl/" target="_blank">
                            <img id="imglogo" src="{{asset('img/logo/logodep.png')}}"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav>
                                <ul>
                                    <li><a href="index.php")>Inicio</a></li>
                                    <li><a href="{{ url('/Departamento') }}">Departamento</a></li>
                                    <li class="hidden-sm"><a href="academicos.php">Equipo</a>
                                        <ul>
                                            <li><a href="academicos.php">Académicos</a></li>
                                            <li><a href="funcionarios.php">Administrativos</a></li>
                                        </ul>
                                    </li>
                                   
                                    
                                    <li><a>Carrera</a>
                                        <ul>
                                            <li><a>Pregrado</a>
                                                <ul>
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "pregrado/Ingenieria-Ejecucion.php");*/ ?>>Ingeniería en Ejecución</a> </li> -->
                                                    <li><a href="pregrado/Ingenieria-Civil.php">Ingeniería civil en Computación e Informática</a> </li>
                                                </ul>
                                            </li>
                                            <li><a>Postítulo</a>
                                                <ul>
                                                    <li><a href="postitulo/diplomado-inteligencia-negocios.php")>Diplomado en tecnología para inteligencia de negocios</a></li>
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "postitulo/diplomado-gestion.php"); */?>>Diplomado en gestión de tecnologias de la información</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a>Postgrado</a>
                                                <ul>
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "postgrado/tecnologia.php"); */?>>Magister en tecnologias de la informacion e innovación</a></li> -->
                                                    <li><a href="postgrado/informatica.php")>Magíster en Informática y Ciencias de la Computación</a></li>
                                                    <!-- <li><a href=<?php /* echo fromroot($file, "postgrado/procesos-software.php"); */?>>Diplomado en procesos integrales de software</a></li> -->
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "postgrado/gestion-innovacion.php"); */?>>Diplomado en gestión de innovacion y emprendimiento</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="noticias.php">Noticias</a></li>
                                    
                                    <li><a href="publicaciones.php">Investigaciones</a>
                                        <ul>
                                            <li><a href="publicaciones.php">Publicaciones</a></li>
                                            <li><a href="proyectos.php">Proyectos</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="galerias.php">Galería</a></li>
                                    <!-- <li><a href="trabajo.php">Bolsa de Trabajo</a></li>-->
                                    </li>
                                    <!--<li><a href="bolsaempleo.php">Empleos</a></li>-->
                                </ul>


                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md one"></div>
                        <!-- MENU PRINCIPAL-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>