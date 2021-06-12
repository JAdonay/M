<?php
    include("../config/Variables.php");
    require('../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createMutable(dirname(__DIR__, 1));
    $dotenv->load();
    class DB{
        public function DB(){
            $host=$_ENV['DB_HOST'];
            $user=$_ENV['DB_USER'];
            $pass=$_ENV['DB_PASSWORD'];
            $db=$_ENV['DB_NAME'];
            return $this->conexion=mysqli_connect($host,$user,$pass,$db);
        }
        public function Query($sql,$object=false){
            $query=mysqli_query($this->DB(),$sql);
            switch ($object) {
                case false:
                    return $query;
                    break;
                case true:
                    return mysqli_fetch_object($query);
                    break;
                default:
                    # code...
                    break;
            }
        }
    }