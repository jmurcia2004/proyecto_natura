<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago online</title>
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
        <strong>Tienda online</strong>
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
<h1><head>
<html lang="en">
<head>
<html lang="en">
<head>
<html lang="en">
<head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natura</title>

    <script src="https://www.paypal.com/sdk/js?client-id=AXbWG2rDrqYzPKvo5Ae7UaEfbs2X6sE3hSQBRLjdIwWd4UMT-dsgNtmV0ogLE1WFD9sWaDxcGQ412I_5 "></script>
    <style>
        #paypal-button-container {
            position: absolute;
            top: 70px; /* Adjust this value to move the button down */
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
    
</head>
<body>  
   <div id="paypal-button-container"></div>

   <script>
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill',
            label: 'pay',
            size: 'large' // Puedes cambiar 'large' por 'small', 'medium', 'responsive'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: 50000
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            actions.order.capture().then(function(detalles) {
                window.location.href = "completado.html"
            });
        },
        onCancel: function(data) {
            alert("pago cancelado");
            console.log(data);
        }  
    }).render('#paypal-button-container');
</script>
    
</body>
</html>
</h1>
</main>
