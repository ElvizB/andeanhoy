<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours - Programas Culturales';
?>

<section>
    <div class="bg-banner-section banner_cultural banner_cultural_m">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1>"Traveling leaves you speechless, then turns you into a storyteller."</h1>
                    <h1 class="autor">- Ibn Battuta -</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pt-5 pb-4">
    <div class="container">
        <div class="u-title-programs">
            <h1 class="h1-responsive  wow fadeInUp" data-wow-delay="0.1s">
                CULTURAL PROGRAM
            </h1>
            <p class="wow fadeInUp " data-wow-delay="0.3s">
                Through our cultural programs you have an opportunity to know different destinations and attractions
                that Peru has, wonderful people, various landscapes, majestic snowy mountains and a great gastronomic
                diversity.
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/1.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">5 DAYS / 4 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CUSCO EXPRESS</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Sacred Valley & Machupicchu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    This program has been design for those who only have little time to know the capital
                                    of Cusco and the beautiful citadel of Machupicchu...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/Cusco_Express_5dias_AT_EN.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/2.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">6 DAYS / 5 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ROYAL ANDES</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Sacred Valley & Machupicchu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    A complete experience of colonial & modern Lima with a fascinating journey to visit
                                    marvelous facets of the Inca Empire in Cusco & MachuPicchu...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/REAL_ANDES_6_DAYS_AT_EN.pdf"
                                        target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/3.png" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">10 DAYS / 9 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ANCIENT CIVILIZATIONS</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Chiclayo, Trujillo, Cusco, Sacred Valley &
                            Machupicchu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    This cultural program takes us into a pilgrimage to the MOCHE CIVILIZATION in the
                                    northern Peru, with its adobe pyramids and coastline culture and then the INCA
                                    CIVILIZATION in the south, with its shires and fortress...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/ANCIENT_CIVILIZATIONS_10_DAYS_AT_EN.pdf"
                                        target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/4.png" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">10 DAYS / 9 NIGHTS0 DÍAS / 9 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-fou"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">QUECHUAS AND AYMARAS</h6>
                        <span class="card-title white-text p_subtitulo">Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    This journey takes us to the heart of the Inca civilization of the Queshua and
                                    pre-inca civilization of the Aymaras. In between there is the Titicaca lake with
                                    still some living traditions among the Taquile people and the Uros...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/QUECHUA_AND_AYMARAS_10_DAYS_AT_EN.pdf"
                                        target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            MORE DETAILS</p>
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/5.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">13 DAYS / 12 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">GOLDEN CIRCUIT</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Tarapoto, Chachapoyas, Chiclayo &
                            Trujillo</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The Amazon region is famous in Peru for its misty forests its wasteland and its
                                    privileged microclimates, mysterious tombs and sarcophagi, legacy of an age...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/GOLD_CIRCUIT_13_DAYS_AT_EN.pdf"
                                        target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            MORE DETAILS</p>
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/6.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">14 DAYS / 13 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ANDEAN PERU</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Paracas, Nazca, Arequipa, Colca, Puno,
                            Cusco & más</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    14-day trip by bus and trains, discovering the cultural diversity and marvelous
                                    landscapes of Peru. There will be the opportunity to appreciate the second deepest
                                    canyon in the world and at the roof of the Andes and Lake Titicaca...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/ANDEAN_PERU_14_DAYS_AT_EN.pdf"
                                        target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            MORE DETAILS</p>
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/7.png" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">17 DAYS / 16 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">PERUVIAN EXPEDITION</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Paracas, Nazca, Arequipa, Colca, Puno,
                            Cusco & más</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    17-day trip exploring the coast with deserts and green valleys, colorful highlands
                                    to snow-covered Andean mountains & extensive forest with its diverse ecological,
                                    cultural & historic manifestations...
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
                                    <a href="<?php echo RUTA_PDFEN?>cultural-programs/PERU_EXPEDITION_17_DAYS_AT_EN.pdf"
                                        target="_blank">
                                        <p class="lang p_boton white-text pt-2 font-weight-bold">
                                            MORE DETAILS</p>
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
            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="card waves-effect waves-light zoom wow zoomIn" data-wow-delay="0.2s" style="cursor: auto;">

                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                        <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto.png" alt="First slide">

                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive">You are one click away from starting an unforgettable
                                experience</h6>
                            <span class="white-text font-weight-bold h4-responsive">CONTACT US</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Grid row -->
    </div>
</div>
<?php
  include_once 'plantillas/footer.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>