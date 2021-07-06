<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<section>

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <!-- <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol> -->
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">


            <!-- First slide -->
            <div class="carousel-item active banner_lujo1 view">
                <div class="bg-nota-ab">
                    <div class="bg-nota">
                        <div class="nota-programas2">
                            <h1> “Travel is the only thing you buy that makes you richer.”</h1>
                            <h1 class="autor">- Anónimo -</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item banner_lujo2 ">
                <div class="bg-nota-ab">
                    <div class="bg-nota">
                        <div class="nota-programas2">
                            <h1>"Your body is not a temple, it is an amusement park. Enjoy the ride"</h1>
                            <h1 class="autor">- Anthony Bourdain -</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner_lujo3 ">
                <div class="bg-nota-ab">
                    <div class="bg-nota">
                        <div class="nota-programas2">
                            <h1>“People don’t take trips, trips take people.”</h1>
                            <h1 class="autor">- John Steinbeck -</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

</section>

<div class="pt-5 pb-4">
    <div class="container">
        <div class="u-title-programs">
            <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.1s">
                LUXURY PROGRAMS
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                "Visit Peru and experience its amazing destinations with the comfort and luxury offered by the best
                hotels, trains and services in each destination."
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
                        <img class="w-100" src="images/lujo/l1.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">14 DAYS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one "></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">A Luxury Andean Journey</h6>
                        <span class="card-title white-text p_subtitulo" key="">Lima, Arequipa, Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Dive into an Andean journey through a combination of unique experiences that we have
                                    elaborated in this luxurious itinerary...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/A_Luxury_Andean_Journey_14days_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l2.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">12 DAYS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">A Luxury journey by land and train
                        </h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Puno & Arequipa</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Enjoy the incredible landscapes of the south of Peru, the gastronomy and luxury
                                    services in an exclusive trip by train and stay…
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/A_Luxury_journey_by_land_and_train_12days_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l3.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">12 DAYS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">A wonderful experience to the south
                            of Peru</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Arequipa, Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">This is one of our classic
                                    programs to visit Peru, but we have given it the luxury touch so you can experience
                                    an excellent trip with ...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/wonderful_experience_south_Peru_12days_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l4.jpg" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">10 DAYS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">An Amazing experience in the
                            highlands</h6>
                        <span class="card-title white-text p_subtitulo">Cusco & Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Travel to the highest parts of Peru and enjoy its wonderful landscapes people and
                                    culture combined with excellent services and luxuries...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/An_Amazing_experience_in_the_highlands_10days_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l5.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">10 DAYS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">QUECHUA AND AYMARAS -LUXURY VERSION
                        </h6>
                        <span class="card-title white-text p_subtitulo" key="">Cusco & Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Travel and know the Quechua culture and the Aymaras through this wonderful and
                                    exclusive trip...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/Quechuas_Aymara_Luxury_version_10days_AT.pdf"
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/Salkantay_trek_7d6n_MLP_AT_EN.pdf"
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



        </div>
        <!-- Grid row -->

        <div class="u-subtitle-progromas">
            <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.3s">
                EXTENSIONS
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
                        <img class="w-100" src="images/ProgramasEcologicos/o9.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DAYS / 3 NIGHTS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">DELFIN CRUISE</h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Experience magic on one of the most luxurious cruises in the Peruvian Amazon.
                                    Impressive landscapes, lush forests and natural life at their peak...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/CRUISE_DELFIN_I_4d3n_AT_EN.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/ProgramasEcologicos/o2.png" alt="First slide">
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
                                    The hotel offers a varied
                                    selection of à la carte excursions, including a visit to Inkaterra canopy Walkway, a
                                    bridge system 30 meters above ground...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/PEM_RESERVA_AMAZONICA_4d3n_AT_EN.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.1s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="images/lujo/l8.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">3 HOURS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">BALLESTAS BY YACHT</h6>
                        <span class="card-title white-text p_subtitulo">Pisco - Paracas</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Relax enjoying a drink and tasting seafood while visiting the Ballestas Islands
                                    aboard a Yacht...
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
                                    <a href="<?php echo RUTA_PDFEN?>luxury-programs/HD_extension_Paracas_Yacht_AT_EN.pdf"
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
        </div>
    </div>
</div>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>