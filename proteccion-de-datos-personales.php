<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';
$titulo = 'Andean Tours';
?>


<section class="back-politicas">
    <div class="container py-4 title-politicas">
        <h1>Protección de Datos Personales</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <p>
               <span class="bold-word">ANDEAN TOURS SRL</span>, en Conformidad con lo establecido en la Ley N° 29733 Ley de Protección de Datos Personales y su Reglamento, manifiesta lo siguiente:
               </p>
               <ol class="list-politica">
                   <li>
                   <span class="bold-word">ANDEAN TOURS SRL</span>, en calidad de titular de los bancos de datos personales bajo su responsabilidad, se compromete a mantener la máxima reserva y protección de datos personales suministrados por usuarios, proveedores, colaboradores, visitantes, aliados estratégicos y ciudadanía en general.
                   </li>
                   <li>
                        Los datos personales facilitados se almacenarán en los bancos de datos de titularidad de <span class="bold-word">ANDEAN TOURS SRL</span> y serán tratados, según corresponda, para poder llevar a cabo las finalidades inherentes a la actividad de la organización, tales como:
                        <ul>
                          <li>Promociones de productos turísticos.</li>
                          <li>Reservas turísticas para el desarrollo de los paquetes turísticos.</li>
                          <li>Supervisar y ofrecer un buen desarrollo de servicios turísticos.</li>
                          <li>Gestión de personal y proveedores.</li>
                          <li>Contactar a nuestros clientes.</li>
                        </ul>
                   </li>
                   <li>
                        Datos personales que usted facilita sobre otras personas, Usamos datos personales que usted facilita sobre otras personas como, por ejemplo, aquellas incluidas en su reserva. Cuando facilite datos personales de otras personas, debe asegurarse de que están de acuerdo y le autorizan hacerlo. Asimismo, debe estar seguro, en su caso, de que entienden cómo podríamos usar sus datos personales.
                   </li>
                   <li>
                        Los datos personales son recopilados para los fines expuestos previamente, y no se extenderá a otra finalidad que no haya sido la establecida.
                   </li>
                   <li>
                        Los datos personales proporcionados no serán remitidos a terceros ajenos, salvo que se trate de un tercero encargado de la operación turística tales como líneas aéreas, transportes terrestres, compañía de tren, crucero, hoteles, albergues y guías.
                   </li>
                   <li>
                        Nuestros sitios web pueden contener características de redes sociales, tales como las aplicaciones Facebook e Instagram, las cuales cuentan con sus propias directrices de privacidad.
                        Le rogamos que lea detenidamente sus términos, condiciones y política de privacidad antes de facilitar ningún dato, dado que no asumimos ninguna obligación ni responsabilidad sobre esas características.
                    
                    </li>
                    <li>
                        Conforme a Ley, el titular de los datos personales podrá ejercer sus derechos de acceso, rectificación, cancelación y oposición, 
                        enviando su solicitud mediante correo electrónico a la dirección 
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
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>