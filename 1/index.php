<?php
require_once("controllers/carousel_controllers.php");
$aImagenes = array();


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>CompraYa!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <img src="./recursos/logo.png" class="img-fluid" alt="...">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mi Perfil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-car-front"></i> Vehículos</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-house"></i> Bienes Raíces</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-tablet"></i> Tecnología</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-heart-pulse"></i> Salud & Belleza</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-collection"></i> Coleccionables y Juguetes</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-tv"></i> Electrodomésticos</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Texto Buscado" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>


    <!--Aqui se Crea el carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
   
       <!-- $slides=["Slide1", "Slide2", "Slide3", "Slide4"];
        foreach ($slides as $slides) echo $slides; { ?> 
         --2da opcion--
            $slides=["Slide1", "Slide2", "Slide3", "Slide4"];
        for($i=0;$i<count($slides);$i++) echo $slides[$i];-->
            <!--DEPENDIENDO LA CANTIDAD DE SLDIES SE GENERARAN LOS BOTONES == OPCION ACTIVE / INACTIVE-->

            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i?>" class="active" aria-current="true" aria-label="Slide <?php echo $i?>"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide <?php echo $i++?>"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide <?php echo $i++?>"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide <?php echo $i++?>"></button>
        </div>

        <div class="carousel-inner">
            <?php $i = 1;
            foreach (carousel_controllers::Mostrar() as $carousel) { ?>
                <?php if ($i == 1) { ?>
                    <div class="carousel-item active">
                        <img src="<?php echo $carousel->getSlides() ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $carousel->getTitulo() ?></h5>
                            <p><?php echo $carousel->getDescripcion() ?></p>
                        </div>
                    </div>

                <?php } ?>

                <!--LO UNICO QUE ME FALTA ES QUE EL CAROUSEL SE SIGA MOVIENDO - 
                QUE AVANCE MAS ALLA DE LA2DA IMAGEN-->
                
                <?php if ($i > 1) { ?>
                    <div class="carousel-item">
                        <img src="<?php echo $carousel->getSlides() ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?php echo $carousel->getTitulo() ?></h5>
                            <p><?php echo $carousel->getDescripcion() ?></p>
                        </div>
                    </div>
                <?php } ?>
        <?php $i++;} ?>
        
        </div>
    

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>





    <div class="container-sm">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <p></p>
                <div class="card border-warning mb-3">
                    <img src="./recursos/top.png" style="width:100px" class="img-fluid" alt="...">
                    <div class="card-body text-primary">
                        <h3 class="card-title">Compra sin estafas.</h3>
                        <p class="card-text">Verificamos cada transacción para garantizarte una compra segura.</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <p></p>
                <div class="card border-warning mb-3">
                    <img src="./recursos/vender.png" class="img-fluid" style="width:100px" alt="...">
                    <div class="card-body text-primary">
                        <h3 class="card-title">Vende con confianza</h3>
                        <p class="card-text">Los pagos se realizan con tarjeta, para evitar transacciones ficticias y billetes falsos.</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <p></p>
                <div class="card border-warning mb-3">
                    <img src="./recursos/secure.png" class="img-fluid" style="width:100px" alt="...">
                    <div class="card-body text-primary">
                        <h3 class="card-title">Siempre protegido</h3>
                        <p class="card-text">Tus compras tienen garantía de 2 días después de la entrega.</p>
                    </div>
                </div>
            </div>
        </div>

        <b></b>
        <br>
        <p></p>
        <div>
            <h2 class="text" style="font-family: 'Montserrat', sans-serif">Categorías Populares</h2>
        </div>
        <p></p>
        <div class="row">
            <div class="card-body" style="width: 14rem;">
                <img src="./recursos/tesla.png" style="border-radius:10px" alt="...">
                <p></p>
                <p class="card-text" style="font-family: 'Roboto', sans-serif">Vehículos</p>
            </div>

            <div class="card-body" style="width: 12rem;">
                <img src="./recursos/tech.png" style="border-radius:150px" alt="...">
                <p></p>
                <p class="card-text" style="font-family: 'Roboto', sans-serif">Tecnología</p>
                <!-- <hr> esta opcion hr sirve para colocar una linea debajo-->
            </div>

            <div class="card-body" style="width: 18rem;">
                <img src="./recursos/coleccion.png" style="border-radius:150px" alt="...">
                <p></p>
                <p class="card-text" style="font-family: 'Roboto', sans-serif">Coleccionables y Juguetes</p>
            </div>

            <div class="card-body" style="width: 12rem;">
                <img src="./recursos/electro11.jpg" style="border-radius:150px" alt="...">
                <p></p>
                <p class="card-text" style="font-family: 'Roboto', sans-serif">Electrodomésticos</p>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                            <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                            <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                            <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <img src="./recursos/producto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text" style="font-family: 'Roboto', sans-serif">$10.50</p>
                        <hr>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-dark"><i class="bi bi-eye"></i> Ver</button>
                            <button type="button" class="btn btn-dark"><i class="bi bi-cart4"></i> Comprar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="nav    ">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Todos los derechos reservados - 2022</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Siguenos en las redes sociales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>







