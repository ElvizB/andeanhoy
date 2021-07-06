<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';
include_once 'plantillas/slider-es.php';

$titulo = 'Andean Tours';
?>


<div class="container ">

    <div class="text-center py-4 title-home">
        <h1 class="py-3 wow fadeInUp h1-responsive" data-wow-delay="0.3s">Bienvenido a Perú</h1>
        <h2 class="font-weight-bold wow fadeInUp h2-responsive" data-wow-delay="0.5s">Elige tu destino en Perú con
            nosotros</h2>
        <p class="wow fadeInUp text-justify text-md-center" data-wow-delay="0.7s">
            Desde 1988, Andean Tours ha tenido el privilegio de recibir viajeros de diferentes partes del mundo.
        </p>
        <p class="ow fadeInUp text-justify text-md-center" data-wow-delay="0.7s">
            Nuestro principal objetivo es garantizar la satisfacción de nuestros viajeros durante su
            visita en el Perú y que nuestros viajes inspiren una mirada viajera con corazón y que se
            conviertan en una enriquecedora experiencia personal.
        </p>
    </div>

    <div class="row">

        <div class="col-md-12 col-sm-12 " id="imgweb">

            <div class="z-depth-3" style="display: flex;">

                <div>

                    <div class="recent-project">
                        <a href="<?php echo RUTA_CULTURAES ?>" target="_blank">
                            <figure class="img-galeria">

                                <div class="overlay2">
                                </div>

                                <div class="title2 ">
                                    <div class="borderLetra font-weight-bold">
                                        <p class="text-uppercase">Programas Culturales</p>
                                    </div>
                                </div>

                                <img src="<?php echo RUTA_IMG?>galeria_inicio/a1.png" alt="project image"
                                    class="wow bounceInUp" data-wow-delay="0.3s">

                            </figure>
                        </a>
                    </div>

                </div>

                <div>

                    <div>

                        <div class="recent-project">
                            <a href="<?php echo RUTA_LUJOS ?>" target="_blank">
                                <figure class="img-galeria">

                                    <div class="overlay2">
                                    </div>

                                    <div class="title3">
                                        <div class="borderLetra font-weight-bold">
                                            <p class="text-uppercase">Programas de Lujo</p>
                                        </div>
                                    </div>

                                    <img src="<?php echo RUTA_IMG?>galeria_inicio/a2.png" alt="project image"
                                        class="wow fadeInDown" data-wow-delay="0.4s">
                                </figure>
                            </a>
                        </div>

                    </div>

                    <div style="display: flex;">
                        <div>

                            <div class="recent-project">
                                <a href="<?php echo RUTA_NATURALEZA ?>" target="_blank">
                                    <figure class="img-galeria">

                                        <div class="overlay2">
                                        </div>

                                        <div class="title">
                                            <div class="borderLetra font-weight-bold">
                                                <p class="text-uppercase">Programas Ecológicos y naturaleza</p>
                                            </div>
                                        </div>

                                        <img src="<?php echo RUTA_IMG?>galeria_inicio/a3.png" alt="project image"
                                            class="wow zoomIn" data-wow-delay="0.5s">

                                    </figure>
                                </a>
                            </div>


                        </div>

                        <div>

                            <div class="recent-project">
                                <a href="<?php echo RUTA_CULINARIA ?>" target="_blank">
                                    <figure class="img-galeria">

                                        <div class="overlay2">
                                        </div>

                                        <div class="title">
                                            <div class="borderLetra font-weight-bold">
                                                <p class="text-uppercase">Programas gastronómicos</p>
                                            </div>
                                        </div>

                                        <img src="<?php echo RUTA_IMG?>galeria_inicio/a4.png" alt="project image"
                                            class="wow fadeInLeft" data-wow-delay="0.2s">

                                    </figure>
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="z-depth-3" style="display: flex;">
                <div>

                    <div class="recent-project">
                        <a href="<?php echo RUTA_VIVENCIAL ?>" target="_blank">
                            <figure class="img-galeria">

                                <div class="overlay2">
                                </div>

                                <div class="title">
                                    <div class="borderLetra font-weight-bold">
                                        <p class="text-uppercase">Programas Vivenciales</p>
                                    </div>

                                </div>

                                <img src="<?php echo RUTA_IMG?>galeria_inicio/a5.png" alt="project image"
                                    class="wow fadeInRight">

                            </figure>
                        </a>
                    </div>

                </div>

                <div>

                    <div class="recent-project">
                        <a href="<?php echo RUTA_LUJOS ?>" target="_blank">
                            <figure class="img-galeria">
                                <a href="<?php echo RUTA_AVENTURA ?>" target="_blank">
                                    <div class="overlay2">
                                    </div>

                                    <div class="title">
                                        <div class="borderLetra font-weight-bold">
                                            <p class="text-uppercase">Programas de Aventura</p>
                                        </div>
                                    </div>

                                    <img src="<?php echo RUTA_IMG?>galeria_inicio/a6.png" alt="project image"
                                        class="wow fadeInUp" data-wow-delay="0.2s">

                            </figure>
                        </a>
                    </div>

                </div>

                <div>

                    <div class="recent-project">
                        <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                            <figure class="img-galeria">

                                <div class="overlay2">
                                </div>

                                <div class="title">
                                    <div class="borderLetra font-weight-bold">
                                        <p class="text-uppercase">CONTÁCTANOS</p>

                                    </div>
                                </div>

                                <img src="<?php echo RUTA_IMG?>galeria_inicio/a7.png" alt="project image"
                                    class="wow fadeInRight" data-wow-delay="0.6s">

                            </figure>
                        </a>
                    </div>
                </div>

            </div>

        </div>



        <div class="col-md-12 col-sm-12" id="imgmovil">

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.3s">
                <a href="<?php echo RUTA_CULTURAES ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/uno.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Programas Culturales</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.5s">
                <a href="<?php echo RUTA_NATURALEZA ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/dos.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Programas Ecológicos y naturaleza</p>
                    </div>
                </a>
            </div>
            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.7s">
                <a href="<?php echo RUTA_AVENTURA ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/tres.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Programas de Aventura</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.9s">
                <a href="<?php echo RUTA_CULINARIA ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/cuatro.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Programas gastronómicos</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="1s">
                <a href="<?php echo RUTA_VIVENCIAL ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/cinco.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Programas Vivenciales</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="1.2s">
                <a href="<?php echo RUTA_LUJOS ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/seis.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Programas de Lujo</p>
                    </div>
                </a>
            </div>


            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="1.4s">
                <a href="<?php echo RUTA_CONTACTO ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/siete.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Contáctanos</p>
                    </div>
                </a>
            </div>

        </div>

    </div>

</div>
<!-- Start your project here-->


<?php
  include_once 'plantillas/footer-es.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>