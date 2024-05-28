<html lang="en">
    <head>
        <title>Comprar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/compras.css">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">
        <script src="https://www.paypal.com/sdk/js?client-id=AfXFbLF2od_t255cJD01PbkecchLAAaQbTwTeHCk8qsZ83vHufaQXxO3EYholg1O2WAavSCu1-K649EN&components=buttons"></script>
        
    </head>
    
    <script type="text/javascript" style="text-align: center">
        

        function hallarSubTotal(cantidad,precio){
        return cantidad*precio;
        }

        

      
                    
       
    </script>
    
<body>

    <?php
    include 'encabezado.php';
    ?>
                    <span class="site-imag"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/97/7762432097_b09238fc-346a-4194-832f-663753e6878e.png?cb=1662436924" height="250" width="300"></span>




        <!-- INTRODUCCION --> 

    <marquee>
        <h1 style="color: red; font-family: Arial;"></h1>
    </marquee>



    <section class="section">

        
        <!--TABLA DE COMPRAS-->
        <div class="table-responsive">
            <center>
            <table class="table" border="2">
                <thead>
                    <tr>

                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody id="cuerpoTabla">
                    <tr>
                    </tr>
                    
                    
                </tbody>
                
            </table>
            <tr>
                <td>
                    Total: 
                </td>
                <td>
                <div id="TOTAL"></div>
                    
                </td>
            </tr>
                <tr colspan="5">
                    <br>
                    <br>
                <div id="paypal-button-container" style="max-width:500px;"></div>
                
                </tr>
                </center>
        </div>
    </section>

    <br><br><br>
    <br><br>
    <br><br>
    
    <!-- FOOTER -->
    
    <?php
    include 'piedepagina.php';
    ?>
    
</body>

<script type="text/javascript">
    function añadirCompra()
    {
        tablaDatos.append("<tr><td>" + Nombres + "</td><td>" + apellidos + "</td><td>" + telefono + "</td></tr>");
    }

</script>
    <script>
        const productos = JSON.parse(sessionStorage.getItem('shoppingCart')) || {};
        // Ahora dibujamos la tabla
        const $cuerpoTabla = document.querySelector("#cuerpoTabla");
        var total = 0;
        var cantotal = 0;
        var depurar;
    // Recorrer todos los productos
    Object.keys(productos).forEach(productokey => {
        const producto = productos[productokey];
            // Crear un <tr>
            const $tr = document.createElement("tr");
            // Creamos el <td> de nombre y lo adjuntamos a tr
            let $tdNombre = document.createElement("td");
            $tdNombre.textContent = productokey; // el textContent del td es el nombre
            $tr.appendChild($tdNombre);
            // El td de precio
            let $tdPrecio = document.createElement("td");
            $tdPrecio.textContent = producto.precio;
            $tr.appendChild($tdPrecio);
            // El td del código
            let $tdCodigo = document.createElement("td");
            $tdCodigo.textContent = producto.cantidad;
            $tr.appendChild($tdCodigo);
             // El td del subtotal
            let $tdSub = document.createElement("td");
            $tdSub.textContent = producto.precioTotal;
            $tr.appendChild($tdSub);
            // Finalmente agregamos el <tr> al cuerpo de la tabla
            $cuerpoTabla.appendChild($tr);
            // Y el ciclo se repite hasta que se termina de recorrer todo el arreglo
            total = total + producto.precioTotal;
            cantotal = cantotal + producto.cantidad;
        });
        const myDiv = document.getElementById('TOTAL');

        // Set the text content of the div
        myDiv.textContent = total;
    </script>
    
    <script type="text/javascript">
        function hallarSubTotal(cantidad,precio){
            return cantidad*precio;
        }
    </script>
<script>

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
         purchase_units: [{"description":"CrumbleFlake","amount":{"currency_code":"USD","value":total}}]
       });
     },

     onApprove: function(data, actions) {
     
         actions.order.capture().then(function(details) {
         console.log(details);
         let shoppingCart = sessionStorage.getItem('shoppingCart');
         sessionStorage.removeItem('shoppingCart'); 
         let datos_compra = [{"precio": total,"cantidad": cantotal,"tipo":"usuario registrado"}];
         
        
         return fetch ('registrarcompra.php',{
             method: 'post',
             headers: {
                 "Content-Type": "application/json"
             },
             body: JSON.stringify (datos_compra)
         }).then(response => {
            if (response.ok) {
                
                actions.redirect('http://localhost/HOMBREMAQUINA-PANADERIA/Pasteleria/AgradecimientoCompra.php');
            } else {
                
                console.error('Fetch error: ', response.statusText);
            }
        })
         
        
         


         
     
         
       });
     },

     onError: function(err) {
       console.log(err);
     }
   }).render('#paypal-button-container');
 }
 if ( myDiv.textContent != '0'){
    initPayPalButton() 
 }
</script>
    
    
</html>	
