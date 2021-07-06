<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.es.php';

$titulo = 'Andean Tours';
?>


<section class="back-politicas ">
    <div class="container py-4 title-politicas ">
        <h1>Pagos, Cancelaciones y Reembolsos</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>POLÍTICAS DE PAGO</h2>
               <hr>
                <ol class="list-politica">
                    <li>Toda la documentación para los pagos será enviada de manera digital (correos electrónicos o dispositivos móviles)</li>
                    <li>Formas de pago, opciones: 
                        <ul>
                            <li>A través del uso de tarjetas de crédito pago online (esta opción se activará después de pandemia).</li>
                            <li>A través del uso de transferencias bancarias internacionales o dentro de Perú.     </li>
                            <li>Depósito en las cuentas de ANDEAN TOURS SRL en los siguientes bancos:</li>
                        </ul>
                    </li>

                        <h4>INFORMACIÓN DE CUENTAS BANCARIAS:</h1>
                        <p>BBVA BANCO CONTINENTAL:</p>
                            <ul>
                                <li>Cuenta Corriente en dólares: 0011-0117-0100017187-94</li>
                                <li>Cuenta Corriente en Soles: 0011-0751-570100017435</li>
                            </ul>
                        <p>BANCO DE CRÉDITO (BCP)</p>
                            <ul>
                                <li>Cuenta corriente en dólares:   194-1487420-1-53</li>
                            </ul>
                        <p>A nombre de: ANDEAN TOURS SRL</p>

                    <li>Los comprobantes de pago serán de manera digital.</li>

                </ol>
                             
           </div>
        </div>
    </div>

    <div class="back-politicas-secondary py-4 ">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>POLÍTICA DE CANCELACIONES Y REEMBOLSO</h2>
               <hr>
               <ol class="list-politica">
                  <li>Cambios de fecha sin penalidades en servicios guiados. Cambio de fecha en servicios aéreos, terrestres, ferroviario y fluvial sujetos a las políticas de los proveedores. (Sujeto a disponibilidad de la nueva fecha y penalidades correspondiente).</li>
                  <li>Se podrá cancelar o anular parcial o total las reservas dentro de los 60 a 30 días (90 a 120 días para grupos) previos a la fecha del inicio de su viaje. Se aplicarán penalidades de acuerdo con las políticas de los proveedores relacionados a los servicios u hoteles en general. En caso queden saldos a favor del cliente, estos podrán ser utilizados en futuros servicios (sujeto a disponibilidad de la nueva fecha). En caso se pueda obtener una devolución parcial o total, esta se reembolsará a la cuenta del cliente descontando los gastos administrativos bancarios y/o de los proveedores como servicios hoteles, cruceros, aéreos, trenes o buses.</li>
                  <li>Si la cancelación o anulación parcial o total de las reservas fuese dentro de los 29 días previos a la fecha del inicio de su viaje el prepago anticipado se considerará como saldo a favor para ser aplicable para futuras reservas y se ejecutaran penalidades de acuerdo con las políticas de los proveedores relacionados en el itinerario que solicito el cliente.</li>
                  <li>Es indispensable que los clientes presenten su pasaporte al momento de registrarse en un hotel, ingresar a lugares turisticos y/o ingresar a los aeropuertos. El no presentar el pasaporte y/o documento de identidad solicitado previamente podría ocasionar la anulación de la reserva y se aplicaran las políticas de cancelación correspondientes de cada proveedor.</li>
                  <li>Los tickets aéreos internacionales o domésticos, trenes y servicios de buses dentro de Perú seguirán las políticas de reembolso y cancelación de las líneas aéreas, empresa de trenes y buses.</li>
                </ol>
              
           </div>
        </div>
    </div>
</section>

<?php
include_once 'plantillas/footer-es.php';
include_once 'plantillas/documento-cierre.inc.php';
?>