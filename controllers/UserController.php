<?php
    require('../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createMutable(dirname(__DIR__, 1));
    $dotenv->load();
    include("../models/User.php");
    $accion=$_POST["accion"];
    $User=new User();
    switch ($accion) {
        case 'signup':
            Signup($User);
            break;
        case 'consultar':
            Consultar($User);
            break;
        case 'login':
            Login($User);
            break;
        default:
            break;
    }
    function Signup($User){
        $User->setDatosSignup($_POST['nombre'],$_POST['apellido'],$_POST['mail'],$_POST['usuario'],$_POST['password'],$_POST['razon']);
        $User->create();
        $db=$_ENV['DB_URL'];
        header("Location:" . $db . "#/login");
    }
    function Consultar($User){
        $User->setDatosLogin($_POST['mail'],$_POST['password']);
        $User->Validar(false);
    }
    function Login($User){
        $User->setDatosLogin($_POST['mail'],$_POST['password']);
        $User->Validar(true);
    }