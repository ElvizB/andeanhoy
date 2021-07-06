<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<section>
    <div class="bg-banner-section banner_aventura">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1>
                        “If you think adventure is dangerous, try routine. It is lethal.”
                    </h1>
                    <h1 class="autor">- Paulo Coelho -</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pt-5 pb-4">
    <div class="container">
        <div class="u-title-programs">
            <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.1s">
                ADVENTURE PROGRAMS
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Peru has a diverse geography, in which it allows the adventurer to carry out different types of
                activities such as hiking on Inca trails, mountaineering near the Andean snow-capped mountains, sleeping
                in a capsule raised to 400 meters ...
                <br>
                What do you expect to start your own adventure?
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
                        <img class="w-100" src="images/aventura/a1.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">INCATRAIL</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The Inca Trail to Machu Picchu 4 days is beyond a doubt one of the most beautiful
                                    trails in the Americas. This is the classic experience, hiking through ecosystems
                                    and flora from high desert to rainforests...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Inca_Trail_4d3n_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a2.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">BABY INCATRAIL</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The Short 2-Day Inca Trail (baby Incatrail) includes the most important two days of
                                    the trek to Machu Picchu. Despite the shorter trek time, you will nonetheless
                                    experience the main highlights of the Inca Trail...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Inca_Trail_2d1n_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a3.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">5 DAYS / 4 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">SALKANTAY TREK</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The Salkantay 5-Day Trek to Machu Picchu perfectly combines cultural and natural
                                    beauty; you’ll enjoy the magnificent view of snow-capped Salkantay, the highest
                                    mountain in the Vilcabamba range...</p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Salkantaytrek_5d4n_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a4.jpg" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">LARES TREK</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The Lares valley trek offers a combination of stunning scenery, traditional
                                    cultures, Inca Trail and Machu Picchu on the 4th Day. The trek will take you through
                                    stunning Mountain scenery, over high passes, and you will spend...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Lares_trek_4d3n_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a5.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <img src="images/estrella.png">
                            <span class="white-text font-weight-bold">Luxury Option</span>
                        </div>
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">7 DAYS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">SALKANTAY TREK - LUXURY</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Challenge yourself and follow the road less traveled to Machu Picchu. The Salkantay
                                    Adventure goes beyond deluxe lodges and a great trek...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Salkantay_trek_7d6n_MLP_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a6.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <img src="images/estrella.png">
                            <span class="white-text font-weight-bold">Luxury Option</span>
                        </div>
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">5 DAYS / 4 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">LARES TREK - LUXURY</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Challenge yourself and follow the road less traveled to Machu Picchu. The Salkantay
                                    Adventure goes beyond deluxe lodges and a great trek...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Lares_trek_5d4n_MLP_luxe_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a7.jpg" alt="First slide">

                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CHOQUEQUIRAO TREK</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    This marvellous city played an important connection role between Amazonas, The
                                    Rainforest and Cusco city. This region in particulas has many microweathers and a
                                    landscape full of snonwy peaks ...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Choquequirao_trek_4d3n_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a8.jpg" alt="First slide">
                        <div class="fondo_vinin">
                            <span class="white-text  font-weight-bold">Vinincunca</span>
                        </div>
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">FULL DAY</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">RAINBOW MOUNTAIN</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    The Rainbow Mountain lies 1,000 kilometers away from Cusco is also known as
                                    Vinincunca. This mountain has an altitude of 5,200 meters above sea level and is
                                    located in Pitumarca district...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Vinincuca_FD_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a9.jpg" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">FULL DAY</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">PALCOYO</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Vinincunca and Palcoyo Mountain are located 20 kilometers away from Cusco City;
                                    these mountains are opposite sides of the same coin...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Palcoyo_FD_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a10.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ADVENTURE SKY LODGE
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Located in the Sacred Valley of Cuzco, Peru, the exclusive Skylodge Adventure Suites
                                    offers you the chance to sleep within a completely transparent hanging bedroom, that
                                    allows you to appreciate the impressive...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Skylodge_2d1n_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a11.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">HALF DAY</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">BIKING TOUR
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Tour the most important destinations of the city of Cusco and the Sacred Valley of
                                    the Incas through bicycle circuits that last half a day, and a full day ...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Bike_tours_cusco_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a12.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">FULL DAY</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">WAGRA PUKARA TREK</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    During our hike, we will appreciate the typical flora and fauna of the surrounding
                                    area and three hours later, we will arrive to the Archeological Site of Waqrapukara.
                                    We will visit the most important places such...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Wagrapukara_FD_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a13.jpg" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">HALF DAY</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ATV TOURS
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    We will experience an adventure across the agricultural center of Maras and enjoy
                                    the beautiful landscapes of the mountains in the Sacred Valley of the Inkas
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/ATV_quadbike_cusco_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a14.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 HOURS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">BUGGIE - PARACAS</h6>
                        <span class="card-title white-text p_subtitulo">Paracas</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    We will take the sand cars to go to the Paracas desert to the incredible dunes where
                                    we will have the ride in the buggies leaving all the adrenaline...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/buggies_sandboarding_paracas_AT_EN.pdf"
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
                        <img class="w-100" src="images/aventura/a16.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="lang white-text font-weight-bold">3 DAYS / 2 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">COLCA TREK</h6>
                        <span class="card-title white-text p_subtitulo">Colca-Arequipa</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    In the Colca Canyon you can meet people from the area with their traditional clothes
                                    and traditional dances. It is one of the best areas for lovers of extreme adventure
                                    ...
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
                                    <a href="<?php echo RUTA_PDFEN?>adventure-programs/Colca_Trek_3d2n_AT_ENG.pdf"
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
                        <img class="img-fluid" src="images/contacto_tres.png" alt="First slide">
                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive">Do you want to know these wonders of Nature? Dont think
                                about it anymore and</h6>
                            <span class="white-text font-weight-bold h3-responsive">CONTACT US</span>
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