<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

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
                            <h1> "Viajar es la unica cosa que compras que te hace mas rico"</h1>
                            <h1 class="autor">- Anónimo -</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item banner_lujo2 ">
                <div class="bg-nota-ab">
                    <div class="bg-nota">
                        <div class="nota-programas2">
                            <h1> "Tu cuerpo no es un templo, es un parque de diversiones. Disfruta el viaje"</h1>
                            <h1 class="autor">- Anthony Bourdain -</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item banner_lujo3 ">
                <div class="bg-nota-ab">
                    <div class="bg-nota">
                        <div class="nota-programas2">
                            <h1> "La gente no hace viajes, son los viajes los que hacen a la gente"</h1>
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
                PROGRAMAS DE LUJO
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                "Visita el Perú y experimenta sus asombrosos destinos con la comodidad y lujo que ofrecen los mejores
                hoteles, trenes y servicios en cada destino."
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
                            <span class="white-text font-weight-bold">14 DÍAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one "></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">UN VIAJE ANDINO DE LUJO</h6>
                        <span class="card-title white-text p_subtitulo" key="">Lima, Arequipa, Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Sumergente en un viaje andino a traves de una combinacion de experiencias unicas que
                                    hemos elaborado en este itinerario de lujo...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Viaje_andino_de_lujo_14dias_AT.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">12 DÍAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">UN VIAJE DE LUJO POR TIERRA Y TREN
                        </h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Puno & Arequipa</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Viaje disfrutando los paisajes mas impresionantes del sur del Perú, disfrute la
                                    gastronomía y los servicios de lujo, en un exclusivo viaje en tren y estadi...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Viaje_de_lujo_tierra_tren_12dias_AT.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">12 DÍAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">UNA MARAVILLOSA EXPERIENCIA AL SUR
                            DEL PERÚ</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Arequipa, Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Este es uno de nuestros programas clásicos para visitar Perú, pero le hemos dado el
                                    toque lujo para que puedas experimentar un excelente viaje con...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Maravillosa_experiencia_Peru_12dias_AT.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">10 DÍAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">UNA EXPERIENCIA INCREIBLE EN LA
                            ALTURAS</h6>
                        <span class="card-title white-text p_subtitulo">Cusco & Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Viaja por las partes mas altas del Perú y disfruta de sus maravillosos paisajes,
                                    gente y culura combinado con excelente servicios y hoteles de lujo...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Experiencia_increible_en_las_alturas_10 dias_AT.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">10 DÍAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">QUECHUA Y AYMARAS - VERSIÓN DE LUJO
                        </h6>
                        <span class="card-title white-text p_subtitulo" key="">Cusco & Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Visita y conoce la cultura de los Quecha y los Aymaras a través de este maravilloso
                                    exclusivo viaje...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Quechuas_ y_Aymaras_Lujo_10dias_AT.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">Opción de Lujo</span>
                        </div>
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">7 DÍAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">SALKANTAY TREK DE LUJO</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>



                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    La aventura de Salkantay va más allá de alojamientos de lujo y una gran caminata.
                                    También es una oportunidad única para sumergirse en la cultura andina a medida...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Salkantay_trek_7d6n_MLP_AT_ES.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                EXTENSIONES
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
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CRUCEROS DELFIN</h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">Viva una experiencia mágica en
                                    uno de los cruceros mas lujosos en la amazonia peruana. Paisajes impresionantes,
                                    bosques exuberantes y la vida natural en su máxima expresión...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/Crucero_Delfin_I_Amazonas_4d3n_AT_ES.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">RESERVA AMAZONICA DE INKATERRA</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Viva una experiencia mágica en uno de los cruceros mas lujosos en la amazonia
                                    peruana. Paisajes impresionantes, bosques exuberantes y la vida natural en su máxima
                                    expresión...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/PEM_Reserva_Amazonica_4d3n_AT_ES.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
                            <span class="white-text font-weight-bold">3 HORAS</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">BALLESTAS EN YACHT</h6>
                        <span class="card-title white-text p_subtitulo">Pisco - Paracas</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Relajese disfrutando una bebida y degustando comida marina mientras visita las islas
                                    Ballestas a bordo de un Yacht...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-de-lujos/HD_extension_Paracas_en_Yate_AT_ES.pdf"
                                        target="_blank">
                                        <p class="p_boton white-text pt-2 font-weight-bold">MÁS INFO</p>
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
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>