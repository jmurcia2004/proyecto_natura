<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natura</title>

    <script src="https://www.paypal.com/sdk/js?client-id=AXbWG2rDrqYzPKvo5Ae7UaEfbs2X6sE3hSQBRLjdIwWd4UMT-dsgNtmV0ogLE1WFD9sWaDxcGQ412I_5 "></script>
</head>
<body>  

   <div id="paypal-button-container"></div>

   <script>
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill',
            label: 'pay',
            size: 'responsive' // Puedes cambiar 'large' por 'small', 'medium', 'responsive'
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
