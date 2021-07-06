<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>

<section>
    <div class="bg-banner-section banner_agente">
        <div class="bg-title-section">
            <div class="grid-title-section">
                <!-- <h1> <?php echo $title_agente; ?></h1> -->
            </div>
        </div>
    </div>
</section>

<div class="pt-5 pb-5">

    <div class="container">

        <div class="title-agencia">
            <p class="wow fadeInUp" data-wow-delay="0.1s">
                Andean Tours is a travel agency and tour operator specializing in inbound tourism in Peru. For us it is
                a pleasure to form alliances with more companies with whom we can form business ties to bring more
                tourists to Peru.
            </p>
            <h1 class="h1-responsive wow fadeInUp" data-wow-delay="0.3s" key="t_descrip2">
                <strong>
                    Please complete the following form and we will contact you shortly
                </strong>
            </h1>

        </div>


    </div>

</div>


<div id="trabaja" class="wow fadeIn" data-wow-delay="0.1s">

    <div class="container">

        <!-- Section: Contact v.1 -->
        <section>

            <div class="row align-items-center">


                <!-- Grid column -->
                <div class="col-lg-8 mb-lg-0 mb-4">

                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="h1-responsive title-description-contact">
                            “WORKING IN TEAM DIVIDE THE WORK AND MULTIPLIES THE RESULTS”
                        </h1>

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 ">

                    <!-- Form with header -->
                    <div class="card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card-body">
                            <form id="formulario__agente" class="form height-form2" role="form" action="" method="POST">
                                <!-- Header -->
                                <div class="md-form title_form">

                                    <input type="text" id="nombre_completo" name="nombre_completo"
                                        class=" form-control">
                                    <label for="nombre_completo">Full Name of Contact</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="nombre_empresa" name="nombre_empresa" class="form-control">
                                    <label for="nombre_empresa">Company name</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="nombre_web" name="nombre_web" class="form-control">
                                    <label for="nombre_web"> Company website</label>
                                </div>


                                <div class="md-form title_form">

                                    <input type="text" id="email_empresa" name="email_empresa" class="form-control">
                                    <label for="email_empresa"> Email</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="pais_empresa" name="pais_empresa" class="form-control">
                                    <label for="pais_empresa">Country where the Company resides</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="organization" name="organization" class="form-control">
                                    <label for="organization"> Indicate if you belong to any Organization</label>
                                </div>

                                <div class="md-form title_form">

                                    <textarea id="mensaje_empresa" name="mensaje_empresa"
                                        class="form-control md-textarea" rows="3"></textarea>
                                    <label for="mensaje_empresa">Extra information about the Company</label>
                                </div>
                                <div class="md-form">
                                    <div class="g-recaptcha text-center"
                                        data-sitekey="6Ldz2dIZAAAAANkEYkmECP7qJtb-vpLm_CbupkCR">
                                    </div>
                                    <div id="g-recaptcha-error"></div>
                                </div>

                                <div id="respuestaContact"></div>
                                <div class="text-center">
                                    <button id="btnenviar" class="btn btnfondo waves-effect waves-light">
                                        SEND
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                    <!-- Form with header -->

                </div>
                <!-- Grid column -->


            </div>
            <!-- Grid row -->

        </section>
        <!-- Section: Contact v.1 -->


    </div>

</div>

<div id="mensajeagenteenviado">
    <div class="modal-wrap" id="modalenviado__contact">
        <div class="mensaje-modal-content z-depth-3 animated bounceIn fast">
            <div class="mensaje-modal-header">
                <p class="heading lead text-center mensajeSend">Message Send</p>
                <button type="button" class="close" id="btnremove">
                    <span aria-hidden="true" class="white-text">×</span>
                </button>
            </div>
            <div class="mensaje-modal-body">
                <div class="text-center box-parrafo">
                    <i class="fas fa-check fa-3x green-text mb-3 animated rotateIn"></i>
                    <p class="mensajeForm">Your message has been sent. A member of our team will contact you soon. Have
                        a good day!</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center"></div>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>