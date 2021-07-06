<style rel="stylesheet">
/* TEMPLATE STYLES */
/* Necessary for full page carousel*/

html,
body {
    height: 100%;
}

/* Navigation*/

.navbar {
    background-color: #0081c2 !important;
}

.top-nav-collapse {
    background-color: #0081c2 !important;
}

@media only screen and (max-width: 768px) {
    .navbar {
        background: #0081c2 !important;
    }
}

/* .scrolling-navbar {
    -webkit-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
    -moz-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
    transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
} */

/* Carousel*/

.carousel {
    height: calc(100vh - 130px);
}

@media (max-width: 776px) {
    .carousel {
        height: calc(100vh - 130px);
    }
}

.carousel-item,
.active {
    height: 100%;
}

.carousel-inner {
    height: 100%;
}
</style>

<div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators  data-interval="false"-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-3" data-slide-to="1"></li>
        <li data-target="#carousel-example-3" data-slide-to="2"></li>
        <li data-target="#carousel-example-3" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner z-depth-2" role="listbox">
        <!-- First slide -->
        <div class="carousel-item active banner_uno view">
            <div class="content-info-slider">
                <div class="u-content-house">
                    <p class="primary-title-home">
                        Enjoy the magic and charm of MachuPicchu
                    </p>
                </div>
            </div>
        </div>
        <!--/.First slide-->

        <!-- Second slide -->
        <div class="carousel-item banner_dos view">
            <div class="content-info-slider">
                <div class="u-content-house">
                    <p class="primary-title-home">
                        Connect with the nature inside of the peruvian jungle
                    </p>
                </div>
            </div>
        </div>
        <!--/.Second slide -->

        <!-- Third slide -->
        <div class="carousel-item banner_tres view">
            <div class="content-info-slider">
                <div class="u-content-house">
                    <p class="primary-title-home">
                        Experience the best landscapes that offer the andean treks
                    </p>
                </div>
            </div>
        </div>
        <!--/.Third slide-->

        <!-- Third slide -->
        <div class="carousel-item banner_cuatro view">
            <div class="content-info-slider">
                <div class="u-content-house">
                    <p class="primary-title-home">
                        Visit one of the deepest canyons in the world and its guardian, el condor
                    </p>
                </div>
            </div>
        </div>
        <!--/.Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>