<?php
session_start();
include_once 'app/config.inc.php';
include_once 'app/requirelanguage.php';
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>


<section class="back-politicas ">
    <div class="container py-4 title-politicas ">
        <h1>Payments, Cancellations and Refunds</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>PAYMENT POLICIES</h2>
               <hr>
                <ol class="list-politica">
                    <li>All documentation for payments will be sent digitally (emails or mobile devices)</li>
                    <li>Payment methods, options:
                        <ul>
                            <li>Credit cards, online payment (this option will be activated after a pandemic).</li>
                            <li>International bank transfers or within Peru.</li>
                            <li>Deposit in the accounts of ANDEAN TOURS SRL</li>
                        </ul>
                    </li>

                        <h4>BANK ACCOUNTS INFORMATION:</h1>
                        <p>BBVA BANK CONTINENTAL:</p>
                            <ul>
                                <li>Bank in dollars: 0011-0117-0100017187-94</li>
                                <li>Bank account in Soles: 0011-0751-570100017435</li>
                            </ul>
                        <p>BANK DE CREDITO (BCP)</p>
                            <ul>
                                <li>Bank account in dollars: 194-1487420-1-53</li>
                            </ul>
                        <p>Payable to: <span class="bold-word">ANDEAN TOURS SRL</span></p>

                    <li>The payment vouchers will be digitally.</li>

                </ol>
                             
           </div>
        </div>
    </div>

    <div class="back-politicas-secondary py-4 ">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>CANCELLATION AND REFUND POLICY</h2>
               <hr>
               <ol class="list-politica">
                    <li>Changes of date without penalties in guided services. Change of date on flights, land transport, rail transport and cruises subject to the policies of the providers. (Subject to availability of the new date and corresponding penalties).</li>
                    <li>Reservations may be canceled or partially or totally canceled within 60 to 30 days (90 to 120 days for groups) prior to the date of the start of your trip. Penalties will be applied in accordance with the policies of the providers related to services or hotels in general. In case there are balances in favor of the client, these may be used in future services (subject to availability of the new date). In case a partial or total refund can be obtained, this will be reimbursed to the client's account, discounting the bank administrative expenses, and / or expenses of suppliers such as services, hotels, cruises, flights, trains or buses.</li>
                    <li>If the partial or total cancellation of the reservations were within 29 days prior to the date of the start of your trip, the advance prepayment will be considered as a favorable balance to be applicable for future reservations and penalties will be executed in accordance with the policies of the suppliers listed in the itinerary requested by the client.</li>
                    <li>It is essential that customers present their passport at the time of registering in a hotel, visiting tourist places and / or entering the airports. Failure to present the previously requested passport and / or identity document could lead to the cancellation of the reservation and the corresponding cancellation policies of each provider will be applied.</li>
                    <li>International or domestic air tickets, trains, cruises and bus services within Peru will follow the refund and cancellation policies of the airlines, cruise ships, train and bus companies.</li>
                </ol>
              
           </div>
        </div>
    </div>
</section>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>