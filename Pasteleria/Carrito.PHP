<html lang="en">
    <head>
        <title>Comprar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/compras.css">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">
        
    </head>
    
    <script type="text/javascript" style="text-align: center">
        

        function hallarSubTotal(cantidad,precio){
        return cantidad*precio;
        }

        

      const productos = [{
                id: 1,
                nombre: "Tarta de Chocolate",
                precio: 7.5,
                codigo: 5,
                subtotal:hallarSubTotal(7.5,5),              
            },

            {
                id: 2,
                nombre: "Pastel de Arándanos",
                precio: 7.5,
                codigo: 4,
                subtotal: hallarSubTotal(7.5,4),
            },
            {
                id: 3,
                nombre: "Tarta de Bayas",
                precio: 7.5,
                codigo: 3,
                subtotal: hallarSubTotal(7.5,3),
            },
            {
                id: 4,
                nombre: "Pie de Manzana",
                precio: 7.5,
                codigo: 2,
                subtotal: hallarSubTotal(7.5,2),
            },
            ];
                    
       
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
                <tr colspan="5">
                    <td ><a href="Comprar.PHP"><button onclick="hallarSubTotal()" id="boton-comprar" class="btn btn-danger" >Añadir</button></a></td>
                    <td ><button onclick="hallarSubTotal()" id="boton-comprar" class="btn btn-danger" >Comprar</button></td>
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
        // Ahora dibujamos la tabla
        const $cuerpoTabla = document.querySelector("#cuerpoTabla");
    // Recorrer todos los productos
        productos.forEach(producto => {
            // Crear un <tr>
            const $tr = document.createElement("tr");
            // Creamos el <td> de nombre y lo adjuntamos a tr
            let $tdNombre = document.createElement("td");
            $tdNombre.textContent = producto.nombre; // el textContent del td es el nombre
            $tr.appendChild($tdNombre);
            // El td de precio
            let $tdPrecio = document.createElement("td");
            $tdPrecio.textContent = producto.precio;
            $tr.appendChild($tdPrecio);
            // El td del código
            let $tdCodigo = document.createElement("td");
            $tdCodigo.textContent = producto.codigo;
            $tr.appendChild($tdCodigo);
             // El td del subtotal
            let $tdSub = document.createElement("td");
            $tdSub.textContent = producto.subtotal;
            $tr.appendChild($tdSub);
            // Finalmente agregamos el <tr> al cuerpo de la tabla
            $cuerpoTabla.appendChild($tr);
            // Y el ciclo se repite hasta que se termina de recorrer todo el arreglo
        });
    </script>
    
    <script type="text/javascript">
        function hallarSubTotal(cantidad,precio){
            return cantidad*precio;
        }
    </script>
    
    
    
</html>	
