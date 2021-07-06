<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
include_once 'plantillas/slider.php';

$titulo = 'Andean Tours';
?>


<div class="container ">

    <div class="text-center py-4 title-home">
        <h1 class="py-3 wow fadeInUp h1-responsive" data-wow-delay="0.3s">Welcome to Peru</h1>
        <h2 class="font-weight-bold wow fadeInUp h2-responsive" data-wow-delay="0.5s">Choose your destination in Peru
            with us</h2>
        <p class="wow fadeInUp text-justify text-md-center" data-wow-delay="0.7s">
            Since 1988, Andean Tours has had the privilege of receiving travelers from different parts of the world.
        </p>
        <p class="ow fadeInUp text-justify text-md-center" data-wow-delay="0.7s">
            Our main goal is to guarantee the satisfaction of our travelers during their visit to Peru
            and that our trips inspire a traveler look with heart and that they become an enriching
            personal experience.
        </p>
    </div>

    <div class="row">

        <div class="col-md-12 col-sm-12 " id="imgweb">

            <div class="z-depth-3" style="display: flex;">

                <div>

                    <div class="recent-project">
                        <a href="<?php echo RUTA_CULTURALEN ?>" target="_blank">
                            <figure class="img-galeria">

                                <div class="overlay2">
                                </div>

                                <div class="title2 ">
                                    <div class="borderLetra font-weight-bold">
                                        <p class="text-uppercase">Cultural Programs</p>
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
                            <a href="<?php echo RUTA_LUXURY ?>" target="_blank">
                                <figure class="img-galeria">

                                    <div class="overlay2">
                                    </div>

                                    <div class="title3">
                                        <div class="borderLetra font-weight-bold">
                                            <p class="text-uppercase">Luxury Programs</p>
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
                                <a href="<?php echo RUTA_NATURE ?>" target="_blank">
                                    <figure class="img-galeria">

                                        <div class="overlay2">
                                        </div>

                                        <div class="title">
                                            <div class="borderLetra font-weight-bold">
                                                <p class="text-uppercase">Nature Programs</p>
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
                                <a href="<?php echo RUTA_CULINARY ?>" target="_blank">
                                    <figure class="img-galeria">

                                        <div class="overlay2">
                                        </div>

                                        <div class="title">
                                            <div class="borderLetra font-weight-bold">
                                                <p class="text-uppercase">Gastronomic programs</p>
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
                        <a href="<?php echo RUTA_EXPERIENTIAL ?>" target="_blank">
                            <figure class="img-galeria">

                                <div class="overlay2">
                                </div>

                                <div class="title">
                                    <div class="borderLetra font-weight-bold">
                                        <p class="text-uppercase">Experiential Programs</p>
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
                        <a href="<?php echo RUTA_LUXURY ?>" target="_blank">
                            <figure class="img-galeria">
                                <a href="<?php echo RUTA_ADVENTURE ?>" target="_blank">
                                    <div class="overlay2">
                                    </div>

                                    <div class="title">
                                        <div class="borderLetra font-weight-bold">
                                            <p class="text-uppercase">Adventure Programs</p>
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
                        <a href="<?php echo RUTA_CONTACT ?>" target="_blank">
                            <figure class="img-galeria">

                                <div class="overlay2">
                                </div>

                                <div class="title">
                                    <div class="borderLetra font-weight-bold">
                                        <p class="text-uppercase">CONTACT US</p>

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
                <a href="<?php echo RUTA_CULTURALEN ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/uno.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Cultural Programs</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.5s">
                <a href="<?php echo RUTA_NATURE ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/dos.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Nature Programs</p>
                    </div>
                </a>
            </div>
            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.7s">
                <a href="<?php echo RUTA_ADVENTURE ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/tres.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Adventure Programs </p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="0.9s">
                <a href="<?php echo RUTA_CULINARY ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/cuatro.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Gastronomic programs</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="1s">
                <a href="<?php echo RUTA_EXPERIENTIAL ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/cinco.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Experiential Programs</p>
                    </div>
                </a>
            </div>

            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="1.2s">
                <a href="<?php echo RUTA_LUXURY ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/seis.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">Luxury Programs</p>
                    </div>
                </a>
            </div>


            <div class="py-3"></div>

            <div class="view z-depth-2 wow zoomIn" data-wow-delay="1.4s">
                <a href="<?php echo RUTA_CONTACT ?>">
                    <img src="<?php echo RUTA_IMG?>galeria_inicio/movil/siete.png" class="img-fluid" alt="placeholder">
                    <div class="mask flex-center waves-effect waves-light rgba-black-light">
                        <p class="white-text font-weight-bold">CONTACT US</p>
                    </div>
                </a>
            </div>

        </div>

    </div>

</div>
<!-- Start your project here-->


<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>