<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

$titulo = 'Andean Tours - Programas Culturales';
?>

<section>
    <div class="bg-banner-section banner_cultural banner_cultural_m">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1>"Viajar te deja sin palabras y después te convierte en un narrador de historias."</h1>
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
                PROGRAMAS CULTURALES
            </h1>
            <p class="wow fadeInUp " data-wow-delay="0.3s">
                A través de nuestros programas culturales, tendrpás la oportunidad de conocer diferentes destinos y
                atracciones que Perú tiene;gente maravillosa, paisajes diversos, nevados majestuosos y una
                grandiversidad gastronómica
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
                            <span class="white-text font-weight-bold">5 DÍAS / 4 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CUSCO EXPRESS</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Valle Sagrado & Machupicchu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Este es un programa diseñado para aquellos que solo cuentan con poco tiempo para
                                    conocer la capital Inca del Cuzco y la hermosa ciudadela de Machupichu...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Cusco_Express_5dias_AT.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/2.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">
                                6 DÍAS / 5 NOCHES
                            </span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ANDES REALES</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Cusco, Valle Sagrado & Machupicchu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Con este programa podrás conocer las maravillosas facetas de Lima colonial y
                                    moderna, así como la capital del imperio incaico Cuzco y la impresionante ciudadela
                                    de Machupicchu...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Andes_Reales_6dias_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/3.png" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">10 DÍAS / 9 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">ANTIGUAS CIVILIZACIONES</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Chiclayo, Trujillo, Cusco, Valle Sagrado &
                            Machupicchu</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Este programa reúne el peregrinaje por las antiguas civilizaciones Moche en el norte
                                    de Perú, con sus pirámides de adobe, y la civilización Inca por el sur, con sus
                                    templos fortalezas de...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Antiguas_Civilizaciones_10dias_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/4.png" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">10 DÍAS / 9 NOCHE</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-four">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-fou"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">QUECHUAS Y AYMARAS</h6>
                        <span class="card-title white-text p_subtitulo">Puno & Cusco</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Este viaje nos llevara por el corredor andino de las civilizaciones inca de los
                                    Quechuas y Aymaras. De por medio esta el Lago Titicaca con las islas Uros y Taquile,
                                    habitadas por...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Quechuas_y_Aymaras_10dias_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/5.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">13 DÍAS / 12 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CIRCUITO DORADO</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Tarapoto, Chachapoyas, Chiclayo &
                            Trujillo</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Amazonas es famosa en el Perú por sus bosques de neblina, su páramo y sus
                                    privilegiados microclimas. Misteriosas tumbas y sarcófagos, herencia de una época
                                    donde...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Circuito_Dorado_13dias_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/6.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">14 DÍAS / 13 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">PERÚ ANDINO</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Paracas, Nazca, Arequipa, Colca, Puno,
                            Cusco & más</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Con este programa descubriremos la diversidad cultural y la variedad de los
                                    maravillosos paisajes del Perú. Tendrá la ocasión de apreciar el arte de la época
                                    española, ciudades y fortalezas incas...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Peru_Andino_14dias_AT.pdf"
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
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasCulturales/7.png" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">17 DÍAS / 16 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-tree">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-tree"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">EXPEDICIÓN PERÚ</h6>
                        <span class="card-title white-text p_subtitulo">Lima, Paracas, Nazca, Arequipa, Colca, Puno,
                            Cusco & más</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    17 días explorando la costa, montañas y selva con sus diversos pisos ecológicos,
                                    culturas y manifestaciones históricas. Toda una experiencia que no olvidará...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-culturales/Expedicion_Peru_17dias_AT.pdf"
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
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card waves-effect waves-light zoom wow zoomIn" data-wow-delay="0.2s" style="cursor: auto;">
                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                        <img class="img-fluid" src="<?php echo RUTA_IMG?>contacto.png" alt="First slide">
                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive">Estás a un click de empezar una experiencia inolvidable
                            </h6>
                            <span class="white-text font-weight-bold h4-responsive">CONTÁCTANOS</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Grid row -->
    </div>
</div>
<?php
  include_once 'plantillas/footer-es.php';
  include_once 'plantillas/documento-cierre.inc.php';
?>