<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

$titulo = 'Andean Tours';
?>

<section>
    <div class="bg-banner-section banner_ecologico">
        <div class="bg-nota-ab">
            <div class="bg-nota">
                <div class="nota-programas2">
                    <h1> "Viajar es sobre el hermoso sentimieto de tambalearse en lo desconocido."</h1>
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
                PROGRAMAS ECOLÓGICOS Y NATURALEZA
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.3s">

                Te invitamos a explorar la selva peruana, en donde podrás encontrar especies de flora y fauna, con una
                variedad de hábitat andino, alto andino, tropical y subtropical. </p>
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
                            <span class="la white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">HACIENDA CONCEPCIÓN INKATERRA</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Una impresionante selección de actividades, guiadas por guías exploradores locales,
                                    ofrecen conocimiento de primera mano de la Amazonía peruana...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_Hacienda_Concepcion_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o2.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">RESERVA AMAZÓNICA INKATERRA</h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    El hotel ofrece una variada selección de excursiones a la carta, incluyendo una
                                    visita al Inkaterra Canopy Walkway, un sistema de puentes a 30 metros sobre el
                                    suelo...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_Reserva_Amazonica_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o3.png" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
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
                                    Refugio Amazonas se encuentra en lo profundo de la selva tropical, un oasis de lujo
                                    en el desierto. Con su gran variedad de actividades a la carta, el hotel es ideal
                                    para los amantes de la naturaleza...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_Refugio_Amazonas_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o4.png" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
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
                                    Posada Amazonas Lodge lo conecta con las maravillas naturales y culturales de la
                                    selva de Tambopata. El albergue está convenientemente ubicado a solo dos horas de
                                    Puerto...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_Posada_Amazonas_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o5.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CENTRO DE INVESTIGACIÓN TAMBOPATA
                        </h6>
                        <span class="card-title white-text p_subtitulo">Tambopata – Puerto Maldonado</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Es el único albergue que se encuentra dentro de la , ¡lo que lo convierte en uno de
                                    los refugios más remotos de Sudamérica! La ubicación prístina del lodge...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_TRC_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o6.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
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
                                    Visite a un campamento castañero-shiringuero, una de las actividades económicas más
                                    importantes de la región de Madre de Dios. De un paseo nocturno en barco para un
                                    divertido...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_Corto_Maltes_4d3n_AT_ES.pdf"
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

            <!-- Grid column 6666-->
            <div class="col-lg-4 col-md-6 col-sm-12 pb-5">
                <!--Card-->
                <div class="card wow zoomIn" data-wow-delay="0.2s">
                    <!--Card image-->
                    <div class="waves-effect waves-light zoom" style="cursor: auto;">
                        <img class="w-100" src="<?php echo RUTA_IMG?>ProgramasEcologicos/o7.png" alt="First slide">
                        <div class="fondo_eco">
                            <span class="white-text font-weight-bold">Eco Acentura</span>
                        </div>
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
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
                                    Iniciaremos una caminata hacia las profundidades del bosque, por trochas
                                    especialmente preparadas, con puentes para cruzar las quebradas y ríos...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/PEM_Eco_Amazonia_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="images/ProgramasEcologicos/o8.png" alt="First slide">
                        <div class="color-four fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
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
                                    Uno de los más extensos parques tropicales de América del Sur. Ubicado en la región
                                    Sur-Oriental del Perú, enclavado en los últimos contrafuertes...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/MANU_zona-cultural_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="images/ProgramasEcologicos/o9.png" alt="First slide">
                        <div class="color-one fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-one">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-one"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CRUCERO DELFIN
                        </h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">Viva una experiencia mágica en
                                    uno de los cruceros mas lujosos en la amazonia peruana. Paisajes impresionantes,
                                    bosques exuberantes y la vida...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/Crucero_Delfin_I_Amazonas_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="images/ProgramasEcologicos/o10.png" alt="First slide">
                        <div class="color-two fondo_day_descrip">
                            <span class="white-text font-weight-bold">4 DÍAS / 3 NOCHES</span>
                        </div>
                    </div>
                    <!--Card content-->
                    <div class="card-body color-two">
                        <!--Title-->
                        <div class="triangulo_figura fondo_triangulo-two"></div>
                        <h6 class="card-title white-text font-weight-bold p_titulo">CRUCERO ARIA</h6>
                        <span class="card-title white-text p_subtitulo">Amazonas - Iquitos</span>
                        <!--Text-->
                    </div>

                    <div class="d-flex flex-row">
                        <div class="w-80 fondo-secundary">
                            <div class="card-body">
                                <p class="card-title white-text text-justify p_descrip">
                                    Experimente un viaje por la selva peruana a traves del crucero Aria. Viajará a las
                                    profundidades de las selvas tropicales de la Amazonía para disfrutar de una visión
                                    íntima de su vida silvestre...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/Crucero_Aria_Amazonas_4d3n_AT_ES.pdf"
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
                        <img class="w-100" src="images/ProgramasEcologicos/o11.jpg" alt="First slide">
                        <div class="color-tree fondo_day_descrip">
                            <span class="white-text font-weight-bold">5 DÍAS / 4 NOCHES</span>
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
                                    A traves de este programa podra conocer la historia de la cultura Chachapoyas.
                                    Tambien podravisita la hermosa catarata Gocta y observar los sarcófagos de
                                    Karajia...
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
                                    <a href="<?php echo RUTA_PDFES?>programas-ecologicos-y-naturaleza/Amazonas_Kuelap_5d4n_AT_ES.pdf"
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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card waves-effect waves-light zoom wow zoomIn" data-wow-delay="0.2s" style="cursor: auto;">
                    <a href="<?php echo RUTA_CONTACTO ?>" target="_blank">
                        <img class="img-fluid" src="images/contacto_dos.png" alt="First slide">
                        <div class="ContactoPC">
                            <h6 class="white-text h5-responsive">¿Quieres conocer estas maravillas de la Naturaleza? No
                                lo pienses más y</h6>
                            <span class="white-text font-weight-bold h3-responsive">CONTÁCTANOS</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>