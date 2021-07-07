<div class="navbar-hidden">
    <div class="navbar-web">
        <div class="grid-navbar ">
            <div class="img-logo-navbar">
                <a class="" href="<?php echo SERVIDOR ?>">
                    <img src="<?php echo RUTA_IMG?>logo_andean.png" draggable="false" class="img-fluid" />
                </a>
            </div>
            <ul class="list_navbar">
                <li>
                    <a href="<?php echo SERVIDOR ?>">HOME</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_ABOUT ?>">ABOUT US</a>
                </li>
                <li class="nav-item name-dropdown dropdown" id="open">
                    <a class="nav-link dropdown-toggle">TRAVEL PROGRAMS</a>

                    <div class="submenu-bg dropdown-menu dropdown-primary name-dropdown" id="prueba">
                        <a class="dropdown-item " href="<?php echo RUTA_CULTURALEN ?>"><i
                                class="fas fa-minus mx-3"></i>Cultural Programs</a>
                        <a class="dropdown-item " href="<?php echo RUTA_NATURE ?>"><i
                                class="fas fa-minus mx-3"></i>Nature Programs</a>
                        <a class="dropdown-item " href="<?php echo RUTA_ADVENTURE ?>"><i
                                class="fas fa-minus mx-3"></i>Adventure Programs</a>
                        <a class="dropdown-item" href="<?php echo RUTA_EXPERIENTIAL ?>"><i
                                class="fas fa-minus mx-3"></i>Experiential Programs</a>
                        <a class="dropdown-item " href="<?php echo RUTA_LUXURY ?>"><i
                                class="fas fa-minus mx-3"></i>Luxury Programs</a>
                        <a class="dropdown-item " href="<?php echo RUTA_CULINARY ?>"><i
                                class="fas fa-minus mx-3"></i>Culinary Experience Programs</a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo RUTA_DESTINATIONS ?>">DESTINATIONS</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_CONTACT ?>">CONTACT US</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_TRAVEL ?>">TRAVEL AGENTS</a>
                </li>

            </ul>

            <div class="bg-language">
                <div class="langWrap">
                    <a href="<?php echo RUTA_INICIO ?>" class="pr-3">
                        <img src="images/ban-es.png" alt="">
                    </a>
                    <!-- <a href="changelanguage.php?language=es" language="espanol">
                        <img src="images/ban-en.png" alt="">
                    </a> -->
                </div>

            </div>


        </div>
    </div>
    <div class="img-logo-navbar-movil">
        <a class="" href="<?php echo SERVIDOR ?>">
            <img src="<?php echo RUTA_IMG?>logo_andean.png" draggable="false" class="img-fluid" />
        </a>
    </div>


    <nav id="navbar-movil">
        <div id="toggleIcon" onclick="menuToggle()"></div>
        <div id="menu-overlay" class="contenedor-mresponsive">
            <ul class="menuresponsive">
                <li>
                    <a href="<?php echo SERVIDOR ?>">HOME</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_ABOUT ?>">ABOUT US</a>
                </li>
                <li>
                    <a>TRAVEL PROGRAMS<i class="icono derecha fa fa-chevron-down"></i></a>
                    <ul class="drop-menu-nav">
                        <li>
                            <a href="<?php echo RUTA_CULTURALEN ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Cultural Programs
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA_NATURE ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Nature Programs
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_ADVENTURE ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Adventure Programs
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_EXPERIENTIAL ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Experiential Programs
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_LUXURY?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Luxury Programs
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_CULINARY ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Culinary Experience Programs
                            </a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="<?php echo RUTA_DESTINATIONS ?>">DESTINATIONS</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_CONTACT ?>">CONTACT US</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_TRAVEL ?>">TRAVEL AGENTS</a>
                </li>
                <div class="bg-language-m">
                     <a href="<?php echo RUTA_INICIO ?>" class="pr-3">
                        <img src="images/ban-es.png" alt="">
                    </a>
                </div>
            </ul>
        </div>
    </nav>


</div>