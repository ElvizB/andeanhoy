<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

$titulo = 'Andean Tours';
?>

<section>
    <div class="bg-banner-section banner_vivencial">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1> "Si rechazas la comida, ignoras las costumbres, temes la religión y evitas a la gente, es mejor
                        que te quedes en casa."</h1>
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
                PROGRAMAS VIVENCIALES
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Los programas vivenciales estan diseñados para vivir experiencias basadas en turismo rural
                comunitario-vivencial. Te invitamos a participar en las diversas actividades vivenciales que tenemos en
                diversas partes del Peru; textilería, agroturismo, gastronomía, cerámica, medicina tradicional,
                Artesania, ceremonias y rituales andinos...
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
                            <span class="white-text font-weight-bold">Valle Sagrado</span>
                        </div>
                        <img class="w-100" src="images/vivencial/v1.jpg" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DÍAS / 1 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">AGROTURISMO</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Visitaremos el Valle Sagrado de los Incas, teniendo un encuentro especial con los
                                    habitantes de la comunidad de Mollakas que pueblan los antiguos territorios
                                    Incaicos.
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
                                    <a href="<?php echo RUTA_PDFES?>programas-vivenciales/Vivencial_agroturismo_2d1n_AT_ES.pdf"
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
                            <span class="white-text font-weight-bold">Valle Sagrado</span>
                        </div>
                        <img class="w-100" src="images/vivencial/v2.jpg" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DÍAS / 1 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ARTE Y ARTESANÍA</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Visitaremos el Valle Sagrado de los Incas, teniendo encuentros especiales con los
                                    habitantes de las comunidades que pueblan los antiguos territorios Incaicos.
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
                                    <a href="<?php echo RUTA_PDFES?>programas-vivenciales/Vivencial_arteytextileria_2d1n_AT_ES.pdf"
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
                            <span class="white-text font-weight-bold">Valle Sagrado</span>
                        </div>
                        <img class="w-100" src="images/vivencial/v3.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">2 DÍAS / 1 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">GASTRONOMÍA</h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Conozca sitios arqueológicos prestigiosos del Valle Sagrado vinculados a la
                                    agricultura antigua de los Andes para luego descubrir ingredientes y técnicas
                                    culinarias que perduran y se...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-vivenciales/Vivencial_gastronomia_2d1n_AT_ES.pdf"
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
                            <span class="white-text font-weight-bold">2 DÍAS / 1 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-four"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">RACCHI - MEDICINA TRADICIONAL ANDINA
                        </h6>
                        <span class="card-title white-text p_subtitulo">Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Visitaremos la comunidad de Racchi, donde se ubica uno de los templos Inca más
                                    importante, dedicado a Wiracocha (Dios creador en el mundo andino).
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
                                    <a href="<?php echo RUTA_PDFES?>programas-vivenciales/Vivencial_racchi_2d1n_AT_ES.pdf"
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
                            <span class="white-text font-weight-bold">2 DÍAS / 1 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo5"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ISLAS UROS, AMANTANI & TAQUILE</h6>
                        <span class="card-title white-text p_subtitulo">Puno</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Este viaje nos llevara por el corredor andino de las civilizaciones inca de los
                                    Quechua y Aymaras. De por medio está el Lago Titicaca con las Islas Uros, Amantani y
                                    Taquile, en donde interactuara...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-vivenciales/Vivencial_uros_amantani_taquile_2d1n_AT_ES.pdf"
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
                            <span class="white-text font-weight-bold">2 DÍAS / 1 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">
                            COLCA</span>
                        </h6>
                        <span class="card-title white-text p_subtitulo">Colca - Arequipa</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Combinaremos la ruta clásica del Colca con la visita a las comunidades ancestrales
                                    que se encuentran en el camino, y así aprenderemos como trabajan sus tierras,
                                    productos textiles...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-vivenciales/Vivencial_colca_2d1n_AT_ES.pdf"
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
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>