<?php
    session_start();
    require('../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createMutable(dirname(__DIR__, 1));
    $dotenv->load();
    $host=$_ENV['DB_URL'];
    if (!isset($_SESSION['id'])) {
        header("Location:". $host . "#/login");
    }
    else {
        # code...
    }
    include_once('layouts/app.php');
    include_once("layouts/navbar.php");
    Session("Bienvenidos");
    SessionNavbar($_SESSION['nivel']);
?>
<div>
    
    <div id="main">
        <a href="discusionsuicidio/">
            <div class="discussion suicide__discussion" id="suicide__discussion">
                <div class="content__discussion">
                    <h3>Discusión de Suicidio</h3>
                </div>
            </div>
        </a>
    </div>
</div>