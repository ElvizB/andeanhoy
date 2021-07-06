<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<section>
    <div class="bg-banner-section banner_ecologico">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1> "Travel is about the gorgeous feeling of teetering in the unknown."</h1>
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
                NATURE AND ECOLOGY PROGRAMS
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                We invite you to explore the Peruvian jungle, where you can find species of flora and fauna with a
                variety of Andean Habitat, high Andean, tropical and subtropical.
            </p>
        </div>
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o1.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="la white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">HACIENDA CONCEPCION BY INKATERRA
                        </h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    An impressive selection of activities guided by local scouting guides, offering
                                    firsthand knowledge of the Peruvian Amazon...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_HACIENDA_CONCEPCION_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">
                                            MORE DETAILS
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o2.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">RESERVA AMAZONICA BY INKATERRA</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The hotel offers a varied selection of à la carte excursions, including a visit to
                                    Inkaterra canopy Walkway, a bridge system 30 meters above ground...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_RESERVA_AMAZONICA_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o3.png" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">REFUGIO AMAZONAS</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Refugio Amazonas is located deep in the rainforest, an oasis of luxury in the
                                    desert. With its wide variety of à la carte activities, the hotel is ideal for
                                    nature lovers...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_REFUGIO_AMAZONAS_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o4.png" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">POSADA AMAZONAS</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Posada Amazonas Lodge connects it with the natural and cultural wonders of the
                                    Tambopata jungle. The hostel is conveniently located only two hours from port...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_POSADA_AMAZONAS_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o5.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">TAMBOPATA RESEARCH CENTER</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    It is the only hostel within the Tambopata National Reserve, making it one of the
                                    most remote refuges in South America! The pristine location of the lodge means that
                                    it is surrounded by the best wildlife the Amazon...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_TRC_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o6.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CORTO MALTES LODGE</h6>
                        <span class="card-title white-text p_subtitulo">Tarapoto – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Visit a castañero-shiringuero camp, one of the most important economic activities in
                                    the region of Madre de Dios. From a night boat ride to a fun "Caimans safari" where
                                    you can also, hopefully, see other animals...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_CORTO_MALTES_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
            </div>
            <!-- Grid column -->

            <!-- Grid column 6666-->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o7.png" alt="First slide">
                        <div class="fondo_eco">
                            <span class="white-text font-weight-bold">Eco Adventure</span>
                        </div>
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ECO AMAZONÍA LODGE</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    We will begin a walk towards the depths of the forest, by specially prepared trails,
                                    with bridges to cross the streams and rivers...
                                </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="<?php echo RUTA_IMG?>dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/PEM_ECO_AMAZONIA_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o8.png" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">MANU</h6>
                        <span class="card-title white-text p_subtitulo">Madre de Dios - Manu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    One of the largest tropical parks in South America. It covers an area of 2 million
                                    square hectares of a territory rich in species of flora and fauna, with a variety of
                                    Andean habitat, high Andean, tropical and subtropical...
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
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/MANU_CULTURAL_ZONE_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
            <di class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o9.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            DELFIN CRUISE
                        </h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Experience magic on one of the most luxurious cruises in the Peruvian Amazon.
                                    Impressive landscapes, lush forests and natural life at their peak… an experience
                                    you will never forget...
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
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/CRUISE_DELFIN_I_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->
            </di>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o10.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            ARIA CRUISE
                        </h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Experience a trip through the Peruvian jungle through the Aria cruise ship. You will
                                    travel to the depths of the rainforests of the Amazon to enjoy an intimate view of
                                    their wildlife, ecosystems, local customs and marine...
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
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/CRUISE_ARIA_4d3n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o11.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">
                                5 DAYS / 4 NIGHTS
                            </span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CHACHAPOYAS</h6>
                        <span class="card-title white-text p_subtitulo">Amazonas</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Through this program you will be able to know the history of the Chachapoyas
                                    culture. Also could revive the beautiful Gocta waterfall and observe the sarcophagi
                                    of Karajia...
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
                                    <a href="<?php echo RUTA_PDFEN?>eco-and-nature-programs/Amazonas_Kuelap_5d4n_AT_EN.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS</p>
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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card waves-effect waves-light zoom wow zoomIn" data-wow-delay="0.2s" style="cursor: auto;">
                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                        <img class="img-fluid" src="images/contacto_dos.png" alt="First slide">
                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive">Do you want to know these wonders of Nature? Dont think
                                about it anymore and</h6>
                            <span class="white-text font-weight-bold h3-responsive">CONTACT US</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>