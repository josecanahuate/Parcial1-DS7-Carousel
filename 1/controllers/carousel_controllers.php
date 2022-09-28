<?php
require_once("models/carousel.php");

class carousel_controllers{

    public static function Mostrar(){

        $carousel[]= new carousel(0, "slides/slide1.gif", "BCI", "Better Cotton Initiative");
        $carousel[]= new carousel(1, "slides/slide2.gif", "Daily Protection", "Always Cover");
        $carousel[]= new carousel(2, "slides/slide3.gif", "Giorgio Armani Beauty", "Luminous Silk Concealer");
        $carousel[]= new carousel(3, "slides/slide4.gif", "Qemmet Missan", "Electrodomestics and Kitchen Furniture");        
        return $carousel;

    }

}


?>