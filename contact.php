<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

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
                    <span class="font-weight-bold color-blue">ADDRESS</span>
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
                    <span class="font-weight-bold color-blue">MOBILE NUMBERS</span>
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
                    <span class="font-weight-bold color-blue">EMAIL</span>
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
                        <h1 class="h1-responsive ">THE BEST EXPERIENCES YOU CAN LIVE NOW.</h1>
                        <hr />
                        <h5 class="h1-responsive ">Contact us and we will advise you on your next trip</h5>

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
                                    <label for="nombre">Name</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="apellido" name="apellido" class="form-control">
                                    <label for="apellido">Last Name</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email">Email</label>
                                </div>

                                <div class="md-form title_form">

                                    <input type="text" id="nacionalidad" name="nacionalidad" class="form-control">
                                    <label for="nacionalidad">Nationality</label>
                                </div>

                                <div class="md-form">
                                    <div class="select_form">
                                        <select name="categoria" id="categoria">
                                            <option value="" selected disabled>Desired Hotel Category</option>
                                            <option value="Económico">Economic</option>
                                            <option value="3 estrellas">3 star</option>
                                            <option value="4 estrellas">4 star</option>
                                            <option value="5 estrellas">5 star</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="md-form">
                                    <div class="select_form">
                                        <select name="servicios" id="servicios">
                                            <option value="" selected disabled>Service</option>
                                            <option value="Private Service">Private Service</option>
                                            <option value="Shared Service">Shared Service </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="md-form title_form">

                                    <textarea id="mensaje" name="mensaje" class="form-control md-textarea"
                                        rows="3"></textarea>
                                    <label for="form-text">Detail of your trip*</label>
                                    <span style="color:white;font-size:10px;">* Dates / Destinations you want to visit /
                                        Number of passengers.</span>
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

<div id="mensajecontactoenviado">
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