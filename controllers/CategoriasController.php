<?php
    include('../models/Categorias.php');
    $accion=$_POST["accion"];
    $categorias=new Categorias();
    switch ($accion) {
        case 'consultar':
            ConsultarCategorias($categorias);
            break;
        
        default:
            # code...
            break;
    }
    function ConsultarCategorias($categorias){
        $categorias->ShowCategorias();
    }