<?php  
    class Producto {
       protected $codigoProd;
       protected $nombreProd;
       protected $nombre_corto_prod;
      
       public function getcodigo() {return $this->codigoProd; }
       public function getnombre() {return $this->nombreProd; }
       public function getnombrecorto() {return $this->nombre_corto_prod; }
   

       //Set
       function setCodigo($codigoProd) {$this->codigoProd=$codigoProd; }     
       function setNombreProd($nombreProd) {$this->nombreProd=$nombreProd; } 
       function setNombreCortoProd($nombre_corto_prod) {$this->nombre_corto_prod=$nombre_corto_prod; } 
              
       public function muestra() {echo "El producto es: ".$this->codigoProd."<br>";}
       
       public function __construct($row) {
           $this->codigoProd = $row['codigo'];
           $this->nombreProd = $row['nombre'];
           $this->nombre_corto_prod = $row['nombre_corto'];
       }

   }

   class SubProducto extends Producto {
       protected $codigo;
       protected $nombre;
       protected $PVP;
       //get
       public function getcodigo() {return $this->codigo; }
       public function getnombre() {return $this->nombre; }
       public function getPVP() {return $this->PVP; }

       //set
       function setCodigo($codigo) {$this->codigo=$codigo; }     
       function setNombre($nombre) {$this->nombre=$nombre; } 
       function setPVP($PVP) {$this->PVP=$PVP; } 
       
       public function muestraSubProducto() {echo "<br> El SubProducto es: ".$this->codigo." y el precio es: ".$this->PVP."";}
       
       public function __construct($producto,$codigo,$nombre,$PVP) {
           parent::__construct($producto); //El constructor Padre
           $this->codigo = $codigo;
           $this->nombre = $nombre;
           $this->PVP = $PVP;           
       }
   }
