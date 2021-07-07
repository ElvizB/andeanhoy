<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>


<section class="back-politicas">
    <div class="container py-4 title-politicas">
        <h1>Personal Data Protection</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <p>
                   <span class="bold-word">ANDEAN TOURS SRL</span>, in accordance with the provisions of Law No. 29733 Personal Data Protection Law and its Regulations, states the following:
               </p>
               <ol class="list-politica">
                   <li>
                   <span class="bold-word">ANDEAN TOURS SRL</span>, as the owner of the personal data banks under its responsibility, undertakes to maintain the maximum reserve and protection of personal data supplied by users, suppliers, collaborators, visitors, strategic allies and the general public.
                   </li>
                   <li>
                    The personal data provided will be stored in the data banks owned by <span class="bold-word">ANDEAN TOURS SRL</span> and will be processed, as appropriate, in order to carry out the purposes inherent to the activity of the organization, such as:
                        <ul>
                           <li>Promotions of tourist products.</li>
                           <li>Tourist reservations for the development of tourist packages.</li>
                           <li>Supervise and offer a good development of tourist services.</li>
                           <li>Personnel and supplier management.</li> 
                           <li>Contact our clients.</li>
                        </ul>
                   </li>
                   <li>
                        Personal data that you provide about other people. We use personal data that you provide about other people, such as those included in your reservation. When you provide personal data of other people, you must ensure that they agree and authorize you to do so. You should also be sure, where appropriate, that they understand how we may use your personal data.
                   </li>
                   <li>
                        Personal data is collected for the purposes set out previously, and will not be extended to any other purpose that has not been established.
                   </li>
                   <li>
                        The personal data provided will not be sent to outside third parties, except in the case of a third party in charge of the tourist operation such as airlines, land transport, train company, cruise ship, hotels, hostels and guides.
                   </li>
                   <li>
                        Our websites may contain social media features, such as the Facebook and Instagram applications, which have their own privacy guidelines.
                        We kindly ask you to read their terms, conditions and privacy policy carefully before providing any information, since we do not assume any obligation or responsibility for these characteristics.
                    </li>
                   <li>
                        In accordance with the Law, the owner of the personal data may exercise their rights of access, rectification, cancellation and opposition, 
                        sending their request by email to the address 
                        <u>
                            <a href="mailto:contacto@andean-tours.com">
                            contacto@andean-tours.com
                            </a>
                        </u>
                   </li>
               </ol>
           </div>
        </div>
    </div>
</section>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>