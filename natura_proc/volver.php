<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
     <link href="css/estilos.css" rel= "stylesheet">
</head>
<body>
<header class="bg-dark text-white">
  <div class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
      <a href="#" class="navbar-brand">
        <strong>Tienda Online</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeaderContent" aria-controls="navbarHeaderContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

     <div class="collapse navbar-collapse" id= "navbarHeaderContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="#" class="nav-link active">Catalogo</a>
            </li>   
            
            <li class="nav-item">
                <a href="#" class="nav-link ">Contacto</a>
            </li>
        </ul>
        <a href="carrito.php"class= "btn btn-primary">Carrito</a>
     </div>

    </div>
  </div>
</header>

<main>
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <!-- Primera tarjeta -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/productos/1/camisa.jpeg" width="350" height="350">
                <div class="card-body">
                    <h5 class="card-title">Camisa vino tinto simple</h5>
                    <p class="card-text">$ 30.000</p>
                </div>
                <a href="" class="btn btn-success mr-2"> Agregar</a>
                <a href="detalles.php" class="btn btn-primary"> Detalles</a>  
            </div>
        </div>
        <!-- Segunda tarjeta -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/productos/1/camara.jpeg" width="350" height="350">
                <div class="card-body">
                    <h5 class="card-title">Cámara DSLR XYZ</h5>
                    <p class="card-text">$ 3.500.000</p>
                </div>
                <a href="" class="btn btn-success mr-2"> Agregar</a>
                <a href="detalles.php" class="btn btn-primary"> Detalles</a>  
            </div>
        </div>
        <!-- Tercera tarjeta -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/productos/1/laptop.jpeg" width="350" height="350">
                <div class="card-body">
                    <h5 class="card-title">laptop Samsung</h5>
                    <p class="card-text">$ 3.000.000</p>
                </div>
                <a href="" class="btn btn-success mr-2"> Agregar</a>
                <a href="detalles.php" class="btn btn-primary"> Detalles</a>  
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <!-- Cuarta tarjeta -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/productos/1/bicicleta.jpeg" width="300" height="350">
                <div class="card-body">
                    <h5 class="card-title">Bicicleta de montaña</h5>
                    <p class="card-text">$ 1.500.000</p>
                </div>
                <a href="" class="btn btn-success mr-2"> Agregar</a>
                <a href="detalles.php" class="btn btn-primary"> Detalles</a>  
            </div>
        </div>
        <!-- Quinta tarjeta -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/productos/1/xbox.jpeg" width="350" height="350">
                <div class="card-body">
                    <h5 class="card-title">Xbox One</h5>
                    <p class="card-text">$ 1.500.000</p>
                </div>
                <a href="" class="btn btn-success mr-2"> Agregar</a>
                <a href="detalles.php" class="btn btn-primary"> Detalles</a>  
            </div>
        </div>
        <!-- Sexta tarjeta -->
        <div class="col">
            <div class="card shadow-sm">
                <img src="images/productos/1/play.jpeg" width="350" height="350">
                <div class="card-body">
                    <h5 class="card-title">PlayStation 4</h5>
                    <p class="card-text">$ 1.800.000</p>
                </div>
                <a href="" class="btn btn-success mr-2"> Agregar</a>
                <a href="detalles.php" class="btn btn-primary"> Detalles</a>  
            </div>
        </div>
    </div>
</div>
</main>
