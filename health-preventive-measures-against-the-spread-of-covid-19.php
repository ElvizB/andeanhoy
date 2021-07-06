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
        <h1>Health Preventive Measures against the spread of Covid-19</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">              
               <ol class="list-politica">
                   <li>Mandatory use of the mask during your stay, must be used correctly and be in good condition. A double mask or facial protection will be used in the event that it is required in any means of transport, local or destination.</li>
                   <li>Maintain a timely behavior that avoids the contagion of Covid-19. 
                        Note: when coughing or sneezing, cover the mouth and nose with a disposable tissue or with the forearm, never with the hands directly, after sneezing change the mask; also, do not touch the eyes, nose and mouth without washing your hands with soap and water beforehand and disinfect the footwear (sole) at the beginning of the operation.
                   </li>
                   <li>Virtual payment methods (bank transfers, applications, among others) to reduce the risk of contagion by direct interaction.</li>
                   <li>All our suppliers are selected taking into account that they comply with the protocols with the sanitary biosafety measures: Hotels, land transport, restaurants, trains and cruises.</li>
                   <li>Tourist sites such as museums, nature reserves comply with biosafety protocols.</li>
                   <li>Place in a disinfected bag all documents or objects that are delivered to the client.</li>
                   <li>Tourist services will be provided in compliance with the current capacity, maintaining physical distance of at least 1 meter.</li>
                   <li>The official tour guide will give the service taking into account his previous evaluation of optimal health, complying with the requirements requested by the regulations issued by the Mincetur. Body temperature and your optimal state of health.</li>
                   <li>During the service, the guide is responsible for monitoring the operation and recording any incident reporting any suspected case of Covid-19, providing timely attention to 113 (Minsa).</li>
               </ol>
           </div>
        </div>
    </div>
</section>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>