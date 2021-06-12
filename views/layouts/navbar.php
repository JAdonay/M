<?php
    function Navbar(){ ?>
        <div>
            <header class="header">
                <nav class="navbar">
                    <a href="#/" class="nav-logo">MSME</a>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="" class="nav-link">Foros</a>
                        </li>
                        <li class="nav-item">
                            <a href="#/login" class="nav-link">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                            <a href="#/signup" class="nav-link">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>
            </header>
        </div>
    <?php }
    function SessionNavbar($nivel){ 
        echo $_SERVER['PHP_SELF'];
        $path=$_SERVER['PHP_SELF'];
        switch ($path) {
            case '/MSME/views/forum.php':
                $logout="../controllers/Logout.php";
                $foro="../foro/";
                $perfil="../mi-perfi/";
                break;
            case '/MSME/views/discusion_suicidio.php':
                $logout="../../controllers/Logout.php";
                $foro="../../foro/";
                $perfil="../../mi-perfi/";
                break;
            default:
                break;
        }
        $rutas = array(
            'Logout' => $logout,
            'Foro'=>$foro,
            'Perfil'=>$perfil
        );
        ?>
        <nav class="navbar">
        <span class="open-slide">
            <a href="#" id="icon__openSidebar">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                    <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                    <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
                </svg>
            </a>
        </span>
        <ul class="navbar-nav">
            <li><a href="">Inicio</a></li>
            <li><a href="">Mensajes</a></li>
            <li><a href="">Notificaciones</a></li>
            <li><a href="">Cuenta</a></li>
        </ul>
        </nav>
        <div id="side-menu" class="side-nav">
            <a href="#" class="btn-close">&times;</a>
            <img src="../src/img/profile__default/default.png" alt="" srcset="" id="profile__logo__sidebar">
            <?php if($nivel=="admin"): ?>
                <a href="">Estadísticas</a>
            <?php endif; ?>
            <a href="<?php echo $rutas["Foro"] ?>">Foros</a>
            <a href="<?php echo $rutas["Perfil"] ?>">Perfil</a>
            <a href="<?php echo $rutas["Logout"] ?>">Cerrar Sesión</a>
        </div>
    <?php }
?>
