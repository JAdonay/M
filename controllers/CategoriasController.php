<?php
    $accion=$_POST["accion"];
    switch ($accion) {
        case 'consultar':
            ConsultarCategorias();
            break;
        
        default:
            # code...
            break;
    }
    function ConsultarCategorias(){
        
    }