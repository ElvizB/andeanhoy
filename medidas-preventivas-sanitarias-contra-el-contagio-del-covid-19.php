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
        <h1>Health Preventive Measures against the spread of Covid-19</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">              
               <ol class="list-politica">
                    <li>Uso obligatorio de la mascarilla durante su permanencia, debiendo ser usada en forma correcta y encontrase en buen estado. Se utilizará protección facial en el caso que sea requerido en algún medio de transporte, local o destino.</li>
                    <li>Mantener un comportamiento oportuno que evite el contagio del Covid-19
                    (Nota: al toser o estornudar, cubrir la boca y nariz con un pañuelo desechable o con el antebrazo, nunca con las manos directamente, luego de estornudar cambiarse la mascarilla; además, no tocar los ojos, nariz y boca sin lavarse las manos con agua y jabón previamente y desinfectarse el calzado (suela) al inicio de la operación.
                    </li>
                    <li>Medios de pago virtuales (transferencias bancarias, aplicativos, entre otros) para reducir el riesgo de contagio por interacción directa.</li>
                    <li>Todos nuestros proveedores son seleccionados tomando en cuenta que cumplan los protocolos con las medidas sanitarias de bioseguridad: Hoteles, medios de transporte, restaurantes, trenes y cruceros.</li>
                    <li>Los sitios turísticos visitados en la operación turística tales como museos, reservas naturales cumplen con los protocolos de bioseguridad.</li>
                    <li>Colocar en una bolsa desinfectada todo documento u objeto que se entregue al cliente.</li>
                    <li>Los servicios turísticos se darán cumpliendo el aforo actual manteniendo el distanciamiento físico al menos de 1 metro.</li>
                    <li>El guía oficial de turismo dará el servicio tomando en cuenta su evaluación previa de salud óptima cumpliendo los requisitos solicitados por el reglamento emitido por el Mincetur. Temperatura corporal y su estado de salud óptima.</li>
                    <li>Durante el servicio el guía tiene la responsabilidad de monitorear la operación y registrar toda incidencia reportando cualquier caso sospechoso del Covid-19 brindando atención oportuna al 113 (Minsa).</li> 
                </ol>
           </div>
        </div>
    </div>
</section>

<?php
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>