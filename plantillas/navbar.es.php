<div class="navbar-hidden">
    <div class="navbar-web">
        <div class="grid-navbar ">
            <div class="img-logo-navbar">
                <a class="" href="<?php echo RUTA_INICIO ?>">
                    <img src="<?php echo RUTA_IMG?>logo_andean.png" draggable="false" class="img-fluid" />
                </a>
            </div>
            <ul class="list_navbar">
                <li>
                    <a href="<?php echo RUTA_INICIO ?>">INICIO</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_NOSOTROS ?>">ACERCA DE NOSOTROS</a>
                </li>
                <li class="nav-item name-dropdown dropdown" id="open">
                    <a class="nav-link dropdown-toggle">PROGRAMAS DE VIAJES</a>

                    <div class="submenu-bg dropdown-menu dropdown-primary name-dropdown" id="prueba">
                        <a class="dropdown-item " href="<?php echo RUTA_CULTURAES ?>"><i
                                class="fas fa-minus mx-3"></i>Programas Culturales</a>
                        <a class="dropdown-item " href="<?php echo RUTA_NATURALEZA ?>"><i
                                class="fas fa-minus mx-3"></i>Programas Ecológicos y naturaleza</a>
                        <a class="dropdown-item " href="<?php echo RUTA_AVENTURA ?>"><i
                                class="fas fa-minus mx-3"></i>Programas de Aventura</a>
                        <a class="dropdown-item" href="<?php echo RUTA_VIVENCIAL ?>"><i
                                class="fas fa-minus mx-3"></i>Programas Vivenciales</a>
                        <a class="dropdown-item " href="<?php echo RUTA_LUJOS ?>"><i
                                class="fas fa-minus mx-3"></i>Programas de Lujo</a>
                        <a class="dropdown-item " href="<?php echo RUTA_CULINARIA ?>"><i
                                class="fas fa-minus mx-3"></i>Programas de Experiencia Culinaria</a>
                    </div>
                </li>
                <li>
                    <a href="<?php echo RUTA_DESTINOS ?>">DESTINOS</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_CONTACTO ?>">CONTÁCTANOS</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_AGENTE ?>">AGENTES DE VIAJE</a>
                </li>

            </ul>

            <div class="bg-language">
                <div class="langWrap">
                    <!-- <a href="changelanguage.php?language=en" language="english" class="pr-3">
                        <img src="images/ban-es.png" alt="">
                    </a> -->
                    <a href="<?php echo SERVIDORES?>">
                        <img src="images/ban-en.png" alt="">
                    </a>
                </div>

            </div>


        </div>
    </div>
    <div class="img-logo-navbar-movil">
        <a class="" href="<?php echo RUTA_INICIO ?>">
            <img src="<?php echo RUTA_IMG?>logo_andean.png" draggable="false" class="img-fluid" />
        </a>
    </div>


    <nav id="navbar-movil">
        <div id="toggleIcon" onclick="menuToggle()"></div>
        <div id="menu-overlay" class="contenedor-mresponsive">
            <ul class="menuresponsive">
                <li>
                    <a href="<?php echo RUTA_INICIO ?>">INICIO</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_NOSOTROS ?>">ACERCA DE NOSOTROS</a>
                </li>
                <li>
                    <a>PROGRAMAS DE VIAJES<i class="icono derecha fa fa-chevron-down"></i></a>
                    <ul class="drop-menu-nav">
                        <li>
                            <a href="<?php echo RUTA_CULTURAES ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Programas Culturales
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo RUTA_NATURALEZA ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Programas Ecológicos y naturaleza
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_AVENTURA ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Programas de Aventura
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_VIVENCIAL ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Programas Vivenciales
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_LUJOS?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Programas de Lujo
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo RUTA_CULINARIA ?>">
                                <i class="fas fa-angle-double-right pr-2"></i>
                                Programas de Experiencia Culinaria
                            </a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="<?php echo RUTA_DESTINOS ?>">DESTINOS</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_CONTACTO ?>">CONTÁCTANOS</a>
                </li>
                <li>
                    <a href="<?php echo RUTA_AGENTE ?>">AGENTES DE VIAJE</a>
                </li>
                <div class="bg-language-m">
                    <a href="changelanguage.php?language=es" class="pr-3">
                        <img src="images/ban-es.png" alt="">
                    </a>
                    <a href="changelanguage.php?language=en">
                        <img src="images/ban-en.png" alt="">
                    </a>
                </div>
            </ul>
        </div>
    </nav>


</div>