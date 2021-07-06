<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

$titulo = 'Andean Tours';
?>

<div>

    <section>
        <div class="bg-banner-section banner_culinaria">
            <div class="bg-nota-ab">
                <div class="bg-nota">
                    <div class="nota-programas2">
                        <h1>
                            "Me emociona cualquier platillo preparado por alguien que se sienta orgulloso de lo que esta
                            haciendo, quien ponga su huella personal en la comida."
                        </h1>
                        <h1 class="autor">- Anthony Bourdain -</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-5 pb-4">
        <div class="container">
            <div class="u-title-programs">
                <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.1s">
                    PROGRAMAS GASTRONÓMICOS
                </h1>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                    La leyenda de la historia de la cocina peruana es considerada una de las más ricas del mundo; puesto
                    que, es una herencia pre incaica, incaica y española… la fusión de una gastronomía de cuatro
                    continentes en tan solo un país, Perú.
                </p>
            </div>
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <!--Card-->
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g1.jpg" alt="First slide">
                            <div class="color-one fondo_day_descrip">
                                <span class="white-text font-weight-bold">14 DÍAS</span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body color-one">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo-one"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">PERU FUSIÓN</h6>
                            <span class="card-title white-text p_subtitulo">Lima, Arequipa, Puno & Cusco</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        Este programa está diseñado para experimentar la variedad de gastronómica en la
                                        ruta sur del Peru. Tendrás la oportunidad de conocer y aprender como se elaboran
                                        algunos platos...
                                    </p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/Peru_fusion_14dias_AT_ES.pdf"
                                            target="_blank">
                                            <p class="lang p_boton white-text pt-2 font-weight-bold">
                                                MÁS INFO</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <!--Card-->
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g2.jpg" alt="First slide">
                            <div class="color-two fondo_day_descrip">
                                <span class="white-text font-weight-bold">7 DÍAS</span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body color-two">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo-two"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">
                                COCINA COSTEÑA Y ANDINA</span></h6>
                            <span class="card-title white-text p_subtitulo">Lima & Cusco</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        En este programa nos centraremos en experimentar y conocer las artes culinarias
                                        de la ciudad de Lima y Cusco.</p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/Cocina_costena_andina_7dias_AT_ES.pdf"
                                            target="_blank">
                                            <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.Card-->
                </div>
                <!-- Grid column -->


                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                    <!--Card-->
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g3.jpg" alt="First slide">
                            <div class="fondo_ha">
                                <span class="lang white-text font-weight-bold">Experiencia en el Crucero Delfín</span>
                            </div>
                            <div class="color-tree fondo_day_descrip">
                                <span class="lang white-text font-weight-bold">4 DÍAS</span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body color-tree">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo-tree"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">COCINA AMAZÓNICA
                            </h6>
                            <span class="card-title white-text p_subtitulo">Puerto Maldonado</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        Cenar a bordo del Delfin es una verdadera aventura gastronómica, cultural e
                                        histórica. El personal a cargo preparara platos contemporáneos utilizando las
                                        selecciones...
                                    </p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/cocina_amazonica_4d3n_AT_ES.pdf"
                                            target="_blank">
                                            <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </div>

    <div>
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="waves-effect waves-light" style="cursor: auto;">
                    <img class="d-block w-100" src="images/culinarias/banner_2.jpg" alt="First slide">
                </div>
                <!--/First slide-->
            </div>
            <!--/.Slides-->
        </div>
        <!--/.Carousel Wrapper-->
        <div class="pt-5 pb-4">
            <div class="container">

                <div class="u-subtitle-progromas">
                    <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.3s">
                        EXPERIENCIAS DESTACADAS
                    </h1>
                    <hr style="border-top: 1px solid #000000;width:100% !important;">
                </div>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g4.jpg" alt="First slide">
                                <div class="color-one fondo_day_descrip">
                                    <span class="white-text font-weight-bold">HD TOUR</span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body color-one">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo-one"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    TOUR CULINARIO DE DIA</h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Combinamos un city tour con un tour gastronómico de Lima en medio día.
                                            Nuestro objetivo es que usted disfrute de una experiencia única, auténtica,
                                            segura y divertida. Queremos...</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/FD_tour_culinario_dia_lima_AT_ES.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
                                                    MÁS INFO</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g5.jpg" alt="First slide">
                                <div class="color-two fondo_day_descrip">
                                    <span class="white-text font-weight-bold">HD TOUR</span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body color-two">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo-two"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    TOUR CULINARIO DE NOCHE</h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Este tour es parecido al tour de dia, pero en esta ocasión visitaremos la
                                            Huaca Pucllana de noche y degustaremos la comida amazónica.</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/FD_tour_culinario_noche_lima_AT_ES.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
                                                    MÁS INFO</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->

                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g6.jpg" alt="First slide">
                                <div class="fondo_ha">
                                    <span class="lang white-text font-weight-bold" key="p_g_hacienda">GREEN BIKE
                                        PERÚ</span>
                                </div>
                                <div class="color-tree fondo_day_descrip">
                                    <span class="white-text font-weight-bold">HD TOUR</span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body color-tree">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo-tree"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    RUTA GASTRONÓMICA EN BICICLETA</h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Pruebe los mejores sabores de nuestra reconocida cocina peruana, en un
                                            emocionante viaje en bicicleta por los distritos de Miraflores, San Isidro y
                                            Barranco.</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/FD_ruta_gastronomica_bicicleta_dia_lima_AT_ES.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
                                                    MÁS INFO</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g7.jpg" alt="First slide">
                                <div class="color-four fondo_day_descrip">
                                    <span class="white-text font-weight-bold">HD TOUR</span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body color-four">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo-four"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    EXPERIENCIA GASTRONOMICA EN CUSCO</h6>
                                <span class="card-title white-text p_subtitulo">Cusco</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            En este tour visitaremos el mercado local de Cusco, en donde conoceremos los
                                            insumo andinos que se utilizan en ese destino, y con ellos aprenderemos a
                                            preparar un delicioso plato.</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/FD_experiencia_culinaria_cusco_AT_ES.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
                                                    MÁS INFO</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g8.jpg" alt="First slide">
                                <div class="color-one fondo_day_descrip">
                                    <span class="white-text font-weight-bold">HD TOUR</span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body color-one">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo-one"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    TOUR CULINARIO AREQUIPEÑO</h6>
                                <span class="card-title white-text p_subtitulo">Arequipa</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Esta experiencia es para los turistas que aman la buena comida, ya que
                                            Arequipa es la capital gastronómica del Perú y el restaurante Chicha del
                                            famoso chef internacional Gastón Acurio...
                                        </p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/FD_experiencia_culinaria_arequipa_AT_ES.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
                                                    MÁS INFO</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- Grid column -->


                    <!-- Grid column -->
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                        <!--Card-->
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g9.jpg" alt="First slide">
                                <div class="fondo_ha">
                                    <span class="lang white-text font-weight-bold">En Hacienda Queirolo</span>
                                </div>
                                <div class="color-two fondo_day_descrip">
                                    <span class="white-text font-weight-bold">HD TOUR</span>
                                </div>
                            </div>
                            <!--Card content-->
                            <div class="card-body color-two">
                                <!--Title-->
                                <div class="triangulo_figura fondo_triangulo-two"></div>
                                <h6 class="card-title white-text font-weight-bold p_titulo">
                                    EXPERIENCIA DEL PISCO EN HACIENDA QUEIROLO</h6>
                                <span class="card-title white-text p_subtitulo">Ica</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Revive la historia de una de las bodegas de Vino y Pisco más antiguas del
                                            Perú, experimenta en una caminata por medio de sus parras los tipos de
                                            suelos, vides y tecnología empleadas en el...
                                        </p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFES?>programa-de-experiencia-culinaria/FD_experiencia_Queirolo_ica_AT_ES.pdf"
                                                target="_blank">
                                                <p class="lang p_boton white-text pt-2 font-weight-bold">
                                                    MÁS INFO</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Card-->
                    </div>
                    <!-- Grid column -->


                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>