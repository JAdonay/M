<?php
    include("DB.php");
    class User extends DB{
        function User(){
            $this->DB=new DB();
            $this->nombre="";
            $this->apellido="";
            $this->mail="";
            $this->password="";
            $this->usuario="";
            $this->razon="";
        }
        function setDatosSignup($nombre,$apellido,$mail,$usuario,$password,$razon){
            $this->nombre=htmlentities(trim($nombre));
            $this->apellido=htmlentities(trim($apellido));
            $this->mail=htmlentities(trim($mail));
            $this->password=htmlentities(trim(sha1($password)));
            $this->usuario=htmlentities(trim($usuario));
            $this->razon=htmlentities(trim($razon));
        }
        function setDatosLogin($mail,$password){
            $this->mail=htmlentities(trim($mail));
            $this->password=htmlentities(trim(sha1($password)));
        }
        function create(){
            $this->Query("INSERT INTO usuarios(mail,nombre_usuario,password) VALUES('$this->mail','$this->usuario','$this->password')");
            $rs=$this->Query("SELECT MAX(id_usuario) AS id FROM usuarios");
            if ($row = mysqli_fetch_row($rs)) {
                $id = trim($row[0]);
            }
            $this->Query("UPDATE usuarios SET id_perfil='$id' WHERE id_usuario='$id'");
            $this->Query("INSERT INTO perfiles(id_perfil,nombre,apellido,razon) VALUES('$id','$this->nombre','$this->apellido','$this->razon')");
        }
        function Validar($login=false){
            $rs=$this->Query("SELECT * FROM usuarios WHERE mail='$this->mail'");
            $num=mysqli_num_rows($rs);
            if ($num==0) {
                echo "MAIL_DONT_EXIST";
            } else {
                $usuario=mysqli_fetch_object($rs);
                if ($usuario->password!=$this->password) {
                    echo "INVALID_PASSWORD";
                } else {
                    if ($login==true) {
                        session_start();
                        $_SESSION['id']=$usuario->id_usuario;
                        $_SESSION['mail']=$usuario->mail;
                        $_SESSION['nombre_usuario']=$usuario->nombre_usuario;
                        $_SESSION['nivel']=$usuario->nivel;
                        header("Location:");
                        $host="localhost/MSME/";
                        header("Location:http://" . $host . "foro/");
                    }
                }
                
            }
            
        }
    }
    