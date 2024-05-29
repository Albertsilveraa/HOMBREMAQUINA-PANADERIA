<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
    <link rel="icon" type="image/png" href="Imagenes/Logo_Empresa.png">
    <link rel="stylesheet" type="text/css" href="CSS3/compras.css">
    <link rel="stylesheet" type="text/css" href="CSS3/footer.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AfXFbLF2od_t255cJD01PbkecchLAAaQbTwTeHCk8qsZ83vHufaQXxO3EYholg1O2WAavSCu1-K649EN&components=buttons"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .site-img {
            display: block;
            margin: 0 auto;
        }
        .table-responsive {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .table th {
            color: white;
            background-color: black;
        }
        #TOTAL {
            font-size: 1.5em;
            font-weight: bold;
        }
        #paypal-button-container {
            margin: 20px auto;
            max-width: 500px;
        }
    </style>
    <script type="text/javascript">
        function hallarSubTotal(cantidad, precio) {
            return cantidad * precio;
        }
    </script>
</head>
<body>

    <?php include 'encabezado.php'; ?>

    <div class="site-img">
        <img src="Imagenes/Crumble&Flake.png" height="400" width="400">
    </div>

    <section class="section">
        <div class="table-responsive">
            <center>
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody id="cuerpoTabla">
                    <tr></tr>
                </tbody>
            </table>
            <div>
                <span>Total: <strong>S/.<strong></span>
                <span id="TOTAL"></span>
            </div>
            <div id="paypal-button-container"></div>
            </center>
        </div>
    </section>

    <?php include 'piedepagina.php'; ?>

    <script type="text/javascript">
        const productos = JSON.parse(sessionStorage.getItem('shoppingCart')) || {};
        const $cuerpoTabla = document.querySelector("#cuerpoTabla");
        var total = 0;
        var cantotal = 0;

        Object.keys(productos).forEach(productokey => {
            const producto = productos[productokey];
            const $tr = document.createElement("tr");

            let $tdNombre = document.createElement("td");
            $tdNombre.textContent = productokey;
            $tr.appendChild($tdNombre);

            let $tdPrecio = document.createElement("td");
            $tdPrecio.textContent = producto.precio;
            $tr.appendChild($tdPrecio);

            let $tdCantidad = document.createElement("td");
            $tdCantidad.textContent = producto.cantidad;
            $tr.appendChild($tdCantidad);

            let $tdSub = document.createElement("td");
            $tdSub.textContent = producto.precioTotal;
            $tr.appendChild($tdSub);

            $cuerpoTabla.appendChild($tr);

            total += producto.precioTotal;
            cantotal += producto.cantidad;
        });

        document.getElementById('TOTAL').textContent = total;
        //sb-barr527794630@personal.example.com
        //}"+c1EYM
        function initPayPalButton() {
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'gold',
                    layout: 'vertical',
                    label: 'pay',
                },
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            "description": "CrumbleFlake",
                            "amount": {"currency_code": "USD", "value": total}
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    actions.order.capture().then(function(details) {
                        let shoppingCart = sessionStorage.getItem('shoppingCart');
                        sessionStorage.removeItem('shoppingCart'); 
                        let datos_compra = [{"precio": total, "cantidad": cantotal, "tipo": "usuario registrado"}];
                        
                        return fetch('registrarcompra.php', {
                            method: 'post',
                            headers: {"Content-Type": "application/json"},
                            body: JSON.stringify(datos_compra)
                        }).then(response => {
                            if (response.ok) {
                                actions.redirect('http://localhost/HOMBREMAQUINA-PANADERIA-main/Pasteleria/AgradecimientoCompra.php');
                            } else {
                                console.error('Fetch error: ', response.statusText);
                            }
                        });
                    });
                },
                onError: function(err) {
                    console.log(err);
                }
            }).render('#paypal-button-container');
        }
        if (total != 0) {
            initPayPalButton();
        }
    </script>
</body>
</html>
