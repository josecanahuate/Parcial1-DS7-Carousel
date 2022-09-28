<?php
    include_once('producto.php');   
    $producto = array(
        "codigo" => "Embutidos",
        "nombre" => "Alimentacion",
        "nombre_corto" => "ALI",
    );
    $prod1= new Producto($producto);
    
    $subprodA= new SubProducto($producto,'Chorizos','chorizos','12.5');
    $subprodB= new SubProducto($producto,'Salchichas','Tomates','6');
    $subprodC= new SubProducto($producto,'Salamines','Arroz','1.5');
    
    $subprodA->muestra();
    $subprodA->muestraSubProducto();
    $subprodB->muestraSubProducto();
    $subprodC->muestraSubProducto();