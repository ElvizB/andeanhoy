<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

$titulo = 'Andean Tours';
?>


<!-- Section: Contact v.1 -->
<section class="">
    <!--Google map-->
    <div id="map-container-section" class="z-depth-1-half map-container-section mb-4 wow fadeIn" data-wow-delay="0.1s"
        style="height: 500px">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15603.184731763095!2d-76.9917458!3d-12.1260935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7f5371585eb%3A0x7fd76fcfea4ba3be!2sAndean+Tours!5e0!3m2!1ses!2spe!4v1556027885905!5m2!1ses!2speed"
            frameborder="0" style="border:0;width: 100%;height: 100%;" allowfullscreen>
        </iframe>
    </div>

</section>
<!-- Section: Contact v.1 -->

<div class="container">

    <!-- Section: Testimonials v.3 -->
    <section class="team-section text-center pt-5 pb-5">

        <!--Grid row-->
        <div class="row text-center wow fadeInUp">

            <!--Grid column-->
            <div class="col-md-3 mb-md-0 mb-5">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                        <img src="images/contactos/c1.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <!--Content-->
                    <span class="font-weight-bold color-blue">DIRECCIÓN</span>
                    <p class="dark-text">
                        Centro Empresarial El Nuevo Trigal Calle Los Antares 320 Torre A OF 506 Urbanización La
                        Alborada, Surco Lima 33, Perú
                    </p>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-3 mb-md-0 mb-5">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                        <img src="images/contactos/c2.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <!--Content-->
                    <span class="font-weight-bold color-blue">NÚMEROS DE TELÉFONO MÓVIL</span>
                    <p class="lang dark-text">
                        +51-993504779
                        <br>
                        +51-989285060
                    </p>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-md-0 mb-5">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                        <img src="images/contactos/c3.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <!--Content-->
                    <span class="font-weight-bold color-blue">CORREO ELECTRÓNICO</span>
                    <p class="dark-text">
                        <a href="mailto:hola@andean-tours.com" target="_parent"
                            style="text-decoration:none;color: #595959;">hola@andean-tours.com</a>

                    </p>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3">

                <div class="testimonial">
                    <!--Avatar-->
                    <div class="avatar mx-auto mb-4">
                        <img src="images/contactos/c4.png" class="rounded-circle z-depth-1 img-fluid">
                    </div>
                    <!--Content-->
                    <span class="font-weight-bold color-blue">WEB</span>
                    <p class="lang dark-text">
                        <a href="https://andean-tours.com/" target="_blank"
                            style="text-decoration:none;color: #595959;">www.andean-tours.com</a>
                    </p>
                    <!--Review-->
                </div>

            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

    </section>
    <!-- Section: Testimonials v.3 -->
</div>


<div id="contacto">

    <div class="container ">

        <!-- Section: Contact v.1 -->
        <section>

            <div class="row align-items-center">


                <!-- Grid column -->
                <div class="col-lg-8 mb-lg-0 mb-4">

                    <div class=" wow fadeInUp title-contacto" data-wow-delay="0.1s">
                        <h1 class="h1-responsive ">LAS MEJORES EXPERIENCIAS LAS PUEDES VIVIR AHORA MISMO.</h1>
                        <hr />
                        <h5 class="h1-responsive ">Contáctate con nosotros y te asesoraremos en tu próximo viaje</h5>

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 ">

                    <!-- Form with header -->
                    <div class="card wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card-body">
                            <form id="formulario" class="form height-form2" role="form" action="" method="POST">
                                <!-- Header -->
                                <div class="md-form title_form">
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                    <label for="nombre">Nombre</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="apellido" name="apellido" class="form-control">
                                    <label for="apellido">Apellido</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email">Correo Electrónico</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="nacionalidad" name="nacionalidad" class="form-control">
                                    <label for="nacionalidad">Nacionalidad</label>
                                </div>

                                <div class="md-form">
                                    <div class="select_form">
                                        <select name="categoria" id="categoria">
                                            <option value="" selected disabled>Categoría de Hoteles Deseados</option>
                                            <option value="Económico">Económico</option>
                                            <option value="3 estrellas">3 estrellas</option>
                                            <option value="4 estrellas">4 estrellas</option>
                                            <option value="5 estrellas">5 estrellas</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="select_form">
                                        <select name="servicios" id="servicios">
                                            <option value="" selected disabled>Servicios</option>
                                            <option value="Servicio Privado">Servicio Privado</option>
                                            <option value="Servicio Compartido">Servicio Compartido </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="md-form title_form">

                                    <textarea id="mensaje" name="mensaje" class="form-control md-textarea"
                                        rows="3"></textarea>
                                    <label for="form-text">Detalle de tu viaje*</label>
                                    <span style="color:white;font-size:10px;">* Fechas / Destinos que quieres visitar /
                                        Número de pasajeros.</span>
                                </div>
                                <div class="md-form">
                                    <div class="g-recaptcha text-center"
                                        data-sitekey="6Ldz2dIZAAAAANkEYkmECP7qJtb-vpLm_CbupkCR">
                                    </div>
                                    <div id="g-recaptcha-error"></div>
                                </div>

                                <div id="respuesta"></div>
                                <div class="text-center">
                                    <button id="btnenviar" class="btn btnfondo waves-effect waves-light">
                                        ENVIAR
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

<div id="mensajecontactoenviado">
    <div class="modal-wrap" id="modalenviado__contact">
        <div class="mensaje-modal-content z-depth-3 animated bounceIn fast">
            <div class="mensaje-modal-header">
                <p class="heading lead text-center mensajeSend">Mensaje Enviado</p>
                <button type="button" class="close" id="btnremove">
                    <span aria-hidden="true" class="white-text">×</span>
                </button>
            </div>
            <div class="mensaje-modal-body">
                <div class="text-center box-parrafo">
                    <i class="fas fa-check fa-3x green-text mb-3 animated rotateIn"></i>
                    <p class="mensajeForm">"Tu mensaje ha sido enviado. Un miembro de nuestro equipo te contactara en
                        breve. Que tengas un buen dia!"</p>
                </div>
            </div>
            <div class="modal-footer justify-content-center"></div>
        </div>
    </div>
</div>


<?php
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>