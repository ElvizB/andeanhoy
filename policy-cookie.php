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
        <h1>Cookie Policy</h1>
        <hr>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>About cookies and similar technologies</h2>
               <hr>
                <p class="list-politica">
                About cookies and similar technologies
                Cookies are small data files that allow a website to collect and store a range of data on your desktop computer, laptop or mobile device. Cookies help 
                us to provide important features and functionality on our websites and mobile apps, and we use them to improve your customer experience. For example, 
                we use cookies to do the following:
                </p>                             
           </div>
        </div>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>To improve the way our websites and mobile apps work</h2>
               <hr>
                <p class="list-politica">
                    Cookies allow us to assess and improve the way our websites and mobile apps work so that we can personalise your experience and allow you to use many of their useful features.
                </p>                             
           </div>
        </div>
    </div>

    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>To improve the performance of our websites and mobile apps</h2>
               <hr>
                <p class="list-politica">
                    Cookies can help us to understand how our websites and mobile apps are being used, for example, by telling us if you get an error messages as you browse, to test different designs of our website pages. Web analytics, including Google Analytics, provides information about the number of visitors to our website, which parts of our website are most popular and if there are any trends such as one specific page being viewed mostly by people in a particular country. These cookies help us to improve your experience.
                </p>                             
           </div>
        </div>
    </div>

    
    <div class="back-politicas-secondary py-4">
        <div class="container">
           <div class="card-politica py-4 z-depth-1">
               <h2>Your choices when it comes to cookies</h2>
               <hr>
                <p class="list-politica">
                Your choices when it comes to cookies
                You can use your browser settings to accept or reject new cookies and to delete existing cookies. You can also set your browser to notify you each time new cookies are placed on your computer or other device.
                </p>
                <p>
                If you choose to disable some or all cookies, you may not be able to make full use of our websites or mobile apps.
                </p>                             
           </div>
        </div>
    </div>

</section>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>