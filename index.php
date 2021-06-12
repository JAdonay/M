<?php
    session_start();
    require('vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createMutable(__DIR__);
    $dotenv->load();
    $db=$_ENV['DB_URL'];
    $host=$_ENV['DB_URL'];
    if (isset($_SESSION['id'])) {
        header("Location:". $host . "foro/");
    }
    include_once('views/layouts/app.php');
    include_once("views/layouts/navbar.php");
    App("Bienvenidos");
    Navbar();

?>
<div id="signup">
    <div class="container">
        <form class="form__auth__signup" id="auth" name="formSignup" action="controllers/UserController.php" method="POST" onsubmit="return false"> 
            <div class="title">
                <h3>Registrarse</h3>
                <p>Debes llenar todos los campos</p>
            </div>
            <div class="sep"></div>
                <div class="inputs">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="text" name="usuario" placeholder="Nombre de Usuario">
                    <input type="email" placeholder="E-mail" name="mail" />
                    <input type="password" placeholder="Password" name="password" />
                    <input type="text" name="razon" placeholder="Escriba su razon para querer entrar a este sitio">
                    <div class="checkboxy">
                        <input name="mayor" id="checky" value="1" type="checkbox" /><label class="terms">¿Eres mayor de 18 años</label>
                    </div>
                    <input type="hidden" name="accion" value="signup">
                    <button class="btn__submit" type="submit" id="submit" href="#">Registsarse</button>
                    <div id="msg__signup"></div>
            </div>
        </form>
    </div>
​</div>
<div id="login">
    <div class="container">
        <form id="auth" name="formLogin" action="controllers/UserController.php" method="POST" onsubmit="return false">
            <div class="title">
                <h3>Iniciar Sesion</h3>
                <p>You want to fill out this form</p>
            </div>
            <div class="sep"></div>
                <div class="inputs">
                    <input type="email" name="mail" placeholder="e-mail" autofocus />
                    <input type="password" name="password" placeholder="Password" />
                    <button class="btn__submit__login" id="submit" href="#">Iniciar Sesión</button>
                    <input type="hidden" name="accion" value="login">
                    <div id="msg__login"></div>
            </div>
        </form>
    </div>
</div>