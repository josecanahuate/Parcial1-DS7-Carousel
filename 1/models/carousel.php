<!--OBJETIVOS DE LA CARPETA CONTROLLERS: ALMACENAR O DEFINIR LOS OBJETOS QUE VAMOS A UTILIZAR-->
<!--OBJETIVOS DE LA CARPETA MODELS: INTERMEDIARIO ENTRE LA VISTA Y EL MODELO-->

<!--SE CREA UN CONSTRUCTOR PARA INICIALIZAR EL METODO MOSTRAR-->
<?php 
// Definimos la clase
class Carousel{
     
    // Atributos
    public $id;
    public $slides;
    public $titulo;
    public $descripcion;

     
    // Constructor
    public function __construct($id, $slides, $titulo, $descripcion){
        $this->id = $id;
        $this->slides = $slides;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
    }

    //Métodos
    public function getId()
    {
        // Devolvemos un atributo
        return $this->id;
    }

    public function setId($id)
    {
        //Le damos un valor a un atributo
        $this->id = $id;
    }

    public function getSlides()
    {
        // Devolvemos un atributo
        return $this->slides;
    }

    public function setSlides($slides)
    {
        //Le damos un valor a un atributo
        $this->slides = $slides;
    }

    public function getTitulo()
    {
        // Devolvemos un atributo
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        //Le damos un valor a un atributo
        $this->titulo = $titulo;
    }

    public function getDescripcion()
    {
        // Devolvemos un atributo
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        //Le damos un valor a un atributo
        $this->descripcion = $descripcion;
    }

    
   // public function Mostrar()
  //  {
         
        // Llamamos a otros métodos
    //    $info = "/slides".$this->slides;
    //    $info = "<h5>Imagen</h5>".$this->titulo;
    //    $info = "<p>Descripcion</p>".$this->descripcion;
    
   //     return $info;
 //   }

 
}
?>


