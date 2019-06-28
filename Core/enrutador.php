<?php

    class enrutador{

        public function cargar($accion,$parametro){

            switch ($accion) {
                case 'articulos':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->listar();

                break;

                case 'nuevoarticulo':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->crear();
                break;

                case 'eliminararticulo':
                include "Controlador/ArticulosControlador.php";
                $articulo = new ArticulosControlador;
                $articulo->elimnar($parametro);
                break;

                default:
                echo 'Error no se encontro accion';
                break;
            }
            
                

        }


    }

?>