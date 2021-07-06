<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<section>
    <div class="bg-banner-section banner_vivencial">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1>
                        "Si rechazas la comida, ignoras las costumbres, temes la religión y evitas a la gente, es mejor
                        que te quedes en casa."
                    </h1>
                    <h1 class="autor">- James Michenner -</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pt-5 pb-4">
    <div class="container">
        <div class="u-title-programs">
            <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.1s">
                EXPERIENTIAL PROGRAMS
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Experiential programs are designed to live experiences based on rural community-experiential tourism. We
                invite you to participate in the various experiential activities that we have in different parts of
                Peru; textile, agrotourism, gastronomy, ceramics, traditional medicine, crafts, ceremonies and Andean
                rituals ...
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
                        <div class="fondo_eco">
                            <span class="white-text font-weight-bold">Sacred Valley</span>
                        </div>
                        <img class="w-100" src="images/vivencial/v1.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">AGROTOURISM</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    We will visit the Sacred Valley having a special encounter with the inhabitants of
                                    the community of Mollakas that reside in the ancient Incan territories.
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
                                    <a href="<?php echo RUTA_PDFEN?>experiential-programs/Vivential_agroturism_2d1n_AT_EN.pdf"
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
                        <div class="fondo_eco">
                            <span class="white-text font-weight-bold">Sacred Valley</span>
                        </div>
                        <img class="w-100" src="images/vivencial/v2.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            ART AND WEAVING
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    We will visit the Sacred Valley having a special encounter with the inhabitants of
                                    the community that reside in the ancient Incan territories.
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
                                    <a href="<?php echo RUTA_PDFEN?>experiential-programs/Vivential_art_weaving_2d1n_AT_EN.pdf"
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
                        <div class="fondo_eco">
                            <span class="white-text font-weight-bold">Sacred Valley</span>
                        </div>
                        <img class="w-100" src="images/vivencial/v3.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            GASTRONOMY
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Know the prestigious archaeological sites of the Sacred Valley linked to the ancient
                                    agriculture of the Andes and then discover ingredients and culinary techniques that
                                    last until today... </p>
                                <!--Text-->
                            </div>

                        </div>
                        <div class="w-20 flex-shrink-1 fondo-tercero">

                            <div class="">
                                <div class="col-lg-12 text-center line pt-3">
                                    <img class="pb-3" src="images/dow.png" alt="First slide">
                                </div>

                                <div class="col-lg-12">
                                    <a href="<?php echo RUTA_PDFEN?>experiential-programs/Vivential_gastronomy_2d1n_AT_EN.pdf"
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
                        <img class="w-100" src="images/vivencial/v4.jpg" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">RACCHI - TRADITIONAL ANDEAN MEDICINE
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    We will visit the community of racchi where one of the most important Inca temples
                                    is located, dedicated to Wiracocha (creator god of the Andean world).
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
                                    <a href="<?php echo RUTA_PDFEN?>experiential-programs/Vivential_racchi_2d1n_AT_EN.pdf"
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
                        <img class="w-100" src="images/vivencial/v5.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo5"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            UROS, AMANTANI AND TAQUILE ISLANDS
                        </h6>
                        <span class="card-title white-text p_subtitulo">Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    This trip will take us through the Andean corridor of the Inca civilizations of the
                                    Quechua and Aymaras. Visit Lake Titicaca with the islands Uros, Amantani and
                                    Taquile, where you will interact...
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
                                    <a href="<?php echo RUTA_PDFEN?>experiential-programs/Vivential_uros_amantani_taquile_2d1n_AT_ENG.pdf"
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
                        <img class="w-100" src="images/vivencial/v6.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DAYS / 1 NIGHT</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            EXPERIENTIAL PROGRAM AT COLCA CANYON</span>
                        </h6>
                        <span class="card-title white-text p_subtitulo">Colca - Arequipa</span>
                        <!--Text-->
                    </div>


                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">We will combine the classic
                                    route of Colca with the visit to the ancestral communities that are on the road and
                                    we will learn how they work their lands, textile products...
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
                                    <a href="<?php echo RUTA_PDFEN?>experiential-programs/Vivential_colca_2d1n_AT_EN.pdf"
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
        <!-- Grid row -->
    </div>
</div>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>