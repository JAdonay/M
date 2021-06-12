<?php
    include("DB.php");
    class Categorias extends DB{
        public function Cateogrias(){
            
        }
        public function ShowCategorias(){
            $RS=$this->Query("SELECT * FROM categorias");
            $json=array();
            while ($fila=mysqli_fetch_array($RS)) {
                $json[]= array(
                    'id'=>$fila['id_categoria'],
                    'nombre'=>$fila['nombre'],
                    'cantidad'=>$fila['cantidad_hilos'],
                    'color'=>$fila['color'],
                );
            }
            $jsonstring = json_encode($json);
            echo $jsonstring;
        }
    }