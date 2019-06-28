<?php

    include "Core/enrutador.php";
    $enrutador = new enrutador;
        
    $ruta =$_GET['url'];
    $valores = explode("/",$ruta);


    if(isset($valores[0])){
        $accion = $valores[0];
    }

    if(isset($valores[1])){
        $parametro = $valores[1]; 
        $enrutador->cargar($accion,$parametro);
    }else{
        $enrutador->cargar($accion,null);


    }



    




?>