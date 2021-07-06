<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<div>

    <section>
        <div class="bg-banner-section banner_culinaria">
            <div class="bg-nota-ab">
                <div class="bg-nota">
                    <div class="nota-programas2">
                        <h1>
                            "I think food, culture, people and landscape are all absolutely inseparable"
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
                    GASTRONOMIC PROGRAMS
                </h1>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                    The legend of the history of Peruvian cuisine is considered one of the richest in the world; since,
                    it is a pre-Inca, Inca and Spanish heritage ... the fusion of a gastronomy from four continents in
                    just one country, Peru.
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
                                <span class="white-text font-weight-bold">14 DAYS</span>
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
                                        This program is designed to experiment the gastronomic variety on the Peruvian
                                        south route. You have the opportunity to know and learn how some food plates are
                                        prepared...
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
                                        <a href="<?php echo RUTA_PDFEN?>culinary-programs/PERU_FUSION_14 DAYS_AT_EN.pdf"
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
                    <div class="card wow zoomIn" data-wow-delay="0.1s">
                        <!--Card image-->
                        <div class="waves-effect waves-light zoom" style="cursor: auto;">
                            <img class="w-100" src="images/culinarias/g2.jpg" alt="First slide">
                            <div class="color-two fondo_day_descrip">
                                <span class="white-text font-weight-bold">7 DAYS</span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body color-two">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo-two"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">
                                TASTE FROM THE ANDES AND COAST</span></h6>
                            <span class="card-title white-text p_subtitulo">Lima & Cusco</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        In this program we will focus to experiment and know the culinary arts of Lima
                                        and Cusco cities.</p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="<?php echo RUTA_PDFEN?>culinary-programs/Flavors_of_the_Andes_and_Coast _7DAYS_AT_EN.pdf"
                                            target="_blank">
                                            <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS
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
                                <span class="lang white-text font-weight-bold">Dolphin Cruise Experience</span>
                            </div>
                            <div class=" color-tree fondo_day_descrip">
                                <span class="lang white-text font-weight-bold">4 DAYS</span>
                            </div>
                        </div>
                        <!--Card content-->
                        <div class="card-body color-tree">
                            <!--Title-->
                            <div class="triangulo_figura fondo_triangulo-tree"></div>
                            <h6 class="card-title white-text font-weight-bold p_titulo">TASTE FROM THE AMAZON
                            </h6>
                            <span class="card-title white-text p_subtitulo">Puerto Maldonado</span>
                            <!--Text-->
                        </div>

                        <div class="d-flex flex-row">
                            <div class="w-80 fondo-secundary">
                                <div class="card-body">
                                    <p class="card-title white-text text-justify p_descrip">
                                        Dinner onboard Dolphin Cruiser is a real gastronomic cultural and historic
                                        adventure. The staff members will prepare contemporary dishes using the
                                        selections...</p>
                                    <!--Text-->
                                </div>

                            </div>
                            <div class="w-20 flex-shrink-1 fondo-tercero">

                                <div class="">
                                    <div class="col-lg-12 text-center line pt-3">
                                        <img class="pb-3" src="images/dow.png" alt="First slide">
                                    </div>

                                    <div class="col-lg-12">
                                        <a href="<?php echo RUTA_PDFEN?>culinary-programs/culinary_amazonica_4d3n_AT_EN.pdf"
                                            target="_blank">
                                            <p class="p_boton white-text pt-2 font-weight-bold">MORE DETAILS
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
                        FEATURED EXPERIENCES
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
                                    CULINARY TOUR - AM SHIFT</h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            The gastronomic tour of Lima begins in a small artisan coffee roasting in
                                            the colonial and bohemian district of Barranco...</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFEN?>culinary-programs/FD_culinary_tour_day_lima_AT_EN.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                                    CULINARY TOUR BY NIGHT</h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            This tour begins at a luxury restaurant located right on the beach with
                                            spectacular views of the coast of Lima...</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFEN?>culinary-programs/FD_culinary_tour_night_lima_AT_EN.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                                    CULINARY TOUR BY BIKE</h6>
                                <span class="card-title white-text p_subtitulo">Lima</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Experience a great tasting of succulent Lima food on a relaxing stroll along
                                            the Malecón de Miraflores and the Malecón de Barranco</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFEN?>culinary-programs/FD_culinary_bike_lima_AT_EN.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                                    CULINARY EXPERIENCE IN CUSCO</h6>
                                <span class="card-title white-text p_subtitulo">Cusco</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            In this tour we will visit the local market of Cusco, where we will know the
                                            Andean inputs that are used in that destination, and with them we will learn
                                            to prepare a delicious dish.
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
                                            <a href="<?php echo RUTA_PDFEN?>culinary-programs/FD_culinary_experience_cusco_AT_EN.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                                    CULINARY EXPERIENCE IN AREQUIPA</h6>
                                <span class="card-title white-text p_subtitulo">Arequipa</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            This experience is for the tourists who love the good food, Arequipa being
                                            the gastronomic capital of Peru and having the Chicha restaurant of the
                                            famous  international chef Gastón Acurio, offers an unforgettable cuisine
                                            experience...</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFEN?>culinary-programs/HD_Culinary_arequipa_AT_EN.pdf"
                                                target="_blank">
                                                <p class="p_boton white-text pt-2 font-weight-bold">
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
                        <div class="card wow zoomIn" data-wow-delay="0.1s">
                            <!--Card image-->
                            <div class="waves-effect waves-light zoom" style="cursor: auto;">
                                <img class="w-100" src="images/culinarias/g9.jpg" alt="First slide">
                                <div class="fondo_ha">
                                    <span class="lang white-text font-weight-bold">In Hacienda Queirolo</span>
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
                                    A PISCO EXPERIENCE AT HACIENDA QUEIROLO</h6>
                                <span class="card-title white-text p_subtitulo">Ica</span>
                                <!--Text-->
                            </div>

                            <div class="d-flex flex-row">
                                <div class="w-80 fondo-secundary">
                                    <div class="card-body">
                                        <p class="card-title white-text text-justify p_descrip">
                                            Having the chance to spend a few days surrounded by vineyards, connecting
                                            with nature, and learning about wines and piscos is all part of the Queirolo
                                            experience.</p>
                                        <!--Text-->
                                    </div>

                                </div>
                                <div class="w-20 flex-shrink-1 fondo-tercero">

                                    <div class="">
                                        <div class="col-lg-12 text-center line pt-3">
                                            <img class="pb-3" src="images/dow.png" alt="First slide">
                                        </div>

                                        <div class="col-lg-12">
                                            <a href="<?php echo RUTA_PDFEN?>culinary-programs/FD_experience_wine_Queirolo_AT_EN.pdf"
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
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>