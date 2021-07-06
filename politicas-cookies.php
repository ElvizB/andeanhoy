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
        <h1>Política de Cookies</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>Sobre las cookies y otras tecnologías similares</h2>
               <hr>
                <p class="list-politica">
                Sobre las cookies y otras tecnologías similares
                Las cookies son pequeños ficheros de datos que permiten a un sitio web recopilar y almacenar una serie de datos en su ordenador de sobremesa, ordenador portátil o dispositivo móvil. Las cookies nos ayudan a ofrecerle importantes características y funciones en nuestros sitios web y aplicaciones móviles, y las usamos para mejorar su experiencia como cliente. Por ejemplo, usamos cookies con los siguientes objetivos:
                </p>                             
           </div>
        </div>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>Mejorar el funcionamiento de nuestros sitios web y aplicaciones móviles</h2>
               <hr>
                <p class="list-politica">
                Mejorar el funcionamiento de nuestros sitios web y aplicaciones móviles
                Gracias a las cookies podemos analizar y mejorar el funcionamiento de nuestros sitios web y aplicaciones móviles, puesto que nos permiten personalizar su experiencia y poner a su disposición varias de sus útiles características.
                </p>                             
           </div>
        </div>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>Mejorar el rendimiento de nuestros sitios web y aplicaciones móviles</h2>
               <hr>
                <p class="list-politica">
                    Las cookies nos pueden ayudar a entender mejor cómo se están usando nuestros sitios web y aplicaciones móviles, por ejemplo, al indicarnos si recibe mensajes de error mientras navega, y a probar diferentes diseños para nuestras páginas web. El análisis web, incluido Google Analytics, aporta información sobre el número de visitantes de nuestro sitio web, qué partes de nuestro sitio web son más populares y si existe alguna tendencia, como una página concreta que recibe visitas principalmente de personas de un país determinado. Estas cookies nos ayudan a mejorar su experiencia.
                </p>                             
           </div>
        </div>
    </div>

    
    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>Su elección con respecto a las cookies</h2>
               <hr>
                <p class="list-politica">
                Puede usar la configuración de su navegador para aceptar o rechazar nuevas cookies y borrar las cookies existentes. También puede configurar su navegador para que le notifique cada vez que se alojan nuevas cookies en su ordenador o dispositivo.                </p>
                <p>
                Si elige deshabilitar la totalidad o una parte de las cookies, podría no poder usar plenamente nuestros sitios web o aplicaciones móviles.
                </p>                             
           </div>
        </div>
    </div>

</section>

<?php
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>