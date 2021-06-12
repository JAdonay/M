<?php
    session_start();
    session_unset();
    session_destroy();
    require('../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createMutable(dirname(__DIR__, 1));
    $dotenv->load();
    $host=$_ENV['DB_URL'];
    header("Location:" . $host . "#/login");