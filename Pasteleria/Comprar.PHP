    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Comprar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/compras.css">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">
        
         <!-- este es el script del carrito  de compras-->
         <!-- este es el script del carrito  de compras-->
         <!-- USAR RAMA PRINCIPAL-->
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const addButtons = document.querySelectorAll('.card__add');
                const carrito = document.getElementById('carrito');
                const vaciarCarritoButton = document.getElementById('vaciar-carrito');
                const pedirCarritoButton = document.getElementById('pedir-carrito');
                const carritoContainer = document.getElementById('carrito-container');
                const precioFinal = document.getElementById('precio-final');
                
                productosEnCarrito = {};//cambio de const se usara como el carrito
                let totalCarrito = 0;
                // esta function crea una variables de session del carrito
                function initializeCart() {
                if (!sessionStorage.getItem('shoppingCart')) {
                sessionStorage.setItem('shoppingCart', JSON.stringify([]));
                    }
                else{
                    productosEnCarrito = JSON.parse(sessionStorage.getItem('shoppingCart')) || {};
                }
                
                }

                addButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        console.log('Botón clickeado');
                        const item = button.parentElement.parentElement;
                        const itemTitle = item.querySelector('.card__info h2').textContent;
                        const itemPrice = parseFloat(item.querySelector('.card__price').textContent.replace('S/. ', ''));
                        initializeCart()//se crea carrito vacio
        
                        if (productosEnCarrito[itemTitle]) {
                            productosEnCarrito[itemTitle].cantidad++;
                            productosEnCarrito[itemTitle].precio = itemPrice;
                            productosEnCarrito[itemTitle].precioTotal += itemPrice;
                            if(carrito.querySelector(`[data-title="${itemTitle}"]`)){
                            const productoEnCarrito = carrito.querySelector(`[data-title="${itemTitle}"]`);
                            productoEnCarrito.querySelector('.cantidad').textContent = productosEnCarrito[itemTitle].cantidad;
                            productoEnCarrito.querySelector('.precio-total').textContent = `S/. ${productosEnCarrito[itemTitle].precioTotal.toFixed(2)}`;
                            }
                            else {
                                //mostrar todo el carrito
                                Object.keys(productosEnCarrito).forEach(itemTitle => {
                                addDivproduct(itemTitle);
                                
                            })
                            }
                            
                        } else {
                            productosEnCarrito[itemTitle] = {
                                cantidad: 1,
                                precioTotal: itemPrice,
                                precio: itemPrice
                            };
                            
                            if (carritoContainer.classList.contains('habilitado')){
                                addDivproduct(itemTitle);
                            }
                            else{
                                Object.keys(productosEnCarrito).forEach(itemTitle => {
                                addDivproduct(itemTitle);
                            })
                            }
                            
                            
                        }
                        
                        sessionStorage.setItem('shoppingCart', JSON.stringify(productosEnCarrito));
                        carritoContainer.classList.add('habilitado');
                        calcularPrecioTotal();
                        handlebuttons();
                    });
                });
                
                vaciarCarritoButton.addEventListener('click', () => {
                    carrito.innerHTML = '';
                    for (let producto in productosEnCarrito) {
                        delete productosEnCarrito[producto];
                    }
                    totalCarrito = 0;
                    precioFinal.textContent = `Precio Final: S/. 0.00`;
                    sessionStorage.setItem('shoppingCart', JSON.stringify(productosEnCarrito));
                });

                pedirCarritoButton.addEventListener('click', () => {
                    carrito.innerHTML = '';
                    carritoContainer.classList.remove('habilitado');
                    for (let producto in productosEnCarrito) {
                        delete productosEnCarrito[producto];
                    }
                    totalCarrito = 0;
                    precioFinal.textContent = `Precio Final: S/. 0.00`;
                    window.location.href = 'Carrito.PHP';
                });
        
                function calcularPrecioTotal() {
                    totalCarrito = 0;
                    for (let producto in productosEnCarrito) {
                        totalCarrito += productosEnCarrito[producto].precioTotal;
                    }
                    precioFinal.textContent = `Precio Final: S/. ${totalCarrito.toFixed(2)}`;
                }
        
                
                function addDivproduct(itemTitle){
                    const newItem = document.createElement('div');
                            newItem.innerHTML = `
                                <p>${itemTitle} - 
                                    <button class="incrementar">+</button>
                                    <span class="cantidad">${productosEnCarrito[itemTitle].cantidad}</span>
                                    <button class="decrementar">-</button>
                                    - <span class="precio-total">S/. ${productosEnCarrito[itemTitle].precioTotal.toFixed(2)}</span>
                                </p>
                            `;
                            newItem.setAttribute('data-title', itemTitle);
                            carrito.appendChild(newItem);
                            
                            
                            
                }
                //+ y -
           
            function handlebuttons(){
            const incrementButtons = document.querySelectorAll('.incrementar');
            const decrementButtons = document.querySelectorAll('.decrementar');


            incrementButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const productoEnCarrito = button.parentElement.parentElement;
                    const itemTitle = productoEnCarrito.getAttribute('data-title');
                    productosEnCarrito[itemTitle].cantidad += 1;
                    productosEnCarrito[itemTitle].precioTotal += productosEnCarrito[itemTitle].precioTotal / (productosEnCarrito[itemTitle].cantidad - 1);
                    productoEnCarrito.querySelector('.cantidad').textContent = productosEnCarrito[itemTitle].cantidad;
                    productoEnCarrito.querySelector('.precio-total').textContent = `S/. ${productosEnCarrito[itemTitle].precioTotal.toFixed(2)}`;
                    calcularPrecioTotal();
                    sessionStorage.setItem('shoppingCart', JSON.stringify(productosEnCarrito));
                });
            });


            decrementButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const productoEnCarrito = button.parentElement.parentElement;
                    const itemTitle = productoEnCarrito.getAttribute('data-title');
                    if (productosEnCarrito[itemTitle].cantidad > 1) {
                        productosEnCarrito[itemTitle].cantidad--;
                        productosEnCarrito[itemTitle].precioTotal -= productosEnCarrito[itemTitle].precioTotal / (productosEnCarrito[itemTitle].cantidad + 1);
                        productoEnCarrito.querySelector('.cantidad').textContent = productosEnCarrito[itemTitle].cantidad;
                        productoEnCarrito.querySelector('.precio-total').textContent = `S/. ${productosEnCarrito[itemTitle].precioTotal.toFixed(2)}`;
                        calcularPrecioTotal();
                        sessionStorage.setItem('shoppingCart', JSON.stringify(productosEnCarrito));
                    }
                });
            });
            }

                //
            });
            
        </script>
        
    </head>
    <body>
        
    <?php
    include 'encabezado.php';
    ?>

        <span class="site-imag"><img src="Imagenes/Crumble&Flake.png" height="400" width="400"></span>

        <!-- INTRODUCCION --> 

        <marquee>
            <h1 style="color: red; font-family: Arial;"></h1>
        </marquee>

        <section class="section">
            <div class="container">
                <div class="grid">
                    <!-- Aquí van tus artículos -->
                    <article class="card">
                        <img class="card__image" src="Imagenes/Destacados/Tarta_de_chocolate.jpg" height="190" width="250" />
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Tarta de Chocolate</h2>

                                <p>Tarta chocolate, cubierta de hojas de menta</p>
                                <br>

                                <p>Ingredientes:<p>
                                <ul class = "card_lista">
                                    <li tipe="square">Mantequilla</li>
                                    <li tipe="square">Chocolate Negro</li>
                                    <li tipe="square">Leche</li>
                                    <li tipe="square">Cuajada</li>
                                    <li tipe="square">Azúcar</li>
                                    <li tipe="square">Chocolate Blanco</li>
                                    <li tipe="square">Hojas de Menta</li>


                                </ul>
                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>

                    <article class="card">
                        <img class="card__image" src="Imagenes/Destacados/Blueberries.jpg" height="190" width="250"/>
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Pastel de Arándanos </h2>
                                <p>Pastel de arándanos frescos, con vainilla</p>
                                <br>

                                <p>Ingredientes:<p>
                                <ul class = "card_lista">
                                    <li tipe="square">Azúcar Refinada</li>
                                    <li tipe="square">Mantequilla</li>
                                    <li tipe="square">Huevos</li>
                                    <li tipe="square">Leche</li>
                                    <li tipe="square">Arádanos Frescos</li>
                                    <li tipe="square">Harina</li>
                                    <li tipe="square">Vainilla</li>


                                </ul>
                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>

                    <article class="card">
                        <img class="card__image" src="Imagenes/Destacados/Bayas.jpg" />
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Tarta de Bayas</h2>

                                <p>Tarta mantequillada, cubierta de bayas silvestres</p>
                                <br>
                                <p>Ingredientes:<p>
                                <ul class = "card_lista">
                                    <li tipe="square">Harina</li>
                                    <li tipe="square">Cream Cheese</li>
                                    <li tipe="square">Mantequilla</li>
                                    <li tipe="square">Bayas Frescas</li>
                                    <li tipe="square">Azúcar</li>
                                    <li tipe="square">Tapicoa</li>
                                    <li tipe="square">Canela en polvo</li>

                                </ul>

                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>

                    <article class="card">
                        <img class="card__image" src="Imagenes/Pie_manzana.jpg" height="190" width="250"/>
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Pie de Manzana</h2>
                                <p>Exquisito Pie de manzana, horneado a punto medio</p>
                                <br>

                                <p>Ingredientes:<p>
                                <ul class = "card_lista">
                                    <li tipe="square">Manzanas Rojas</li>
                                    <li tipe="square">Harina</li>
                                    <li tipe="square">Mantequilla</li>
                                    <li tipe="square">Limón</li>
                                    <li tipe="square">Azúcar</li>
                                    <li tipe="square">Huevos</li>
                                    <li tipe="square">Canela en polvo</li>

                                </ul>

                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>

                    <article class="card">
                        <img class="card__image" src="Imagenes/Postre_gelatina.jpg" height="190" width="250"/>
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Postre de Gelatina</h2>
                                <p>Dulce postre de frutas, hecha gelatina</p>
                                <br>

                                <p>Ingredientes:<p>
                                <ul class = "card_lista">
                                    <li tipe="square">Leche</li>
                                    <li tipe="square">Gelatina en polvo</li>
                                    <li tipe="square">Fresas</li>
                                    <li tipe="square">Vainilla</li>
                                    <li tipe="square">Piña</li>
                                    <li tipe="square">Gluten</li>
                                    <li tipe="square">Canela en polvo</li>

                                </ul>
                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>

                    <article class="card">
                        <img class="card__image" src="https://i.ibb.co/RT0bjJq/food1.png" />
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Nombre Comida</h2>
                                <p>Descripcion de la comida, con ingredientes</p>
                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>

                    <article class="card">
                        <img class="card__image" src="https://i.ibb.co/JpwBtYk/food2.png" />
                        <div class="card__data">
                            <div class="card__info">
                                <h2>Nombre Comida</h2>
                                <p>Descripcion de la comida, con ingredientes</p>
                            </div>
                            <h3 class="card__price">S/. 7.50</h3>
                            <button class="card__add">+</button>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <div id="carrito-container">
            <h2>Carrito de Compras</h2><br>
            <div id="carrito"></div><br>
            <button class="btn" id="vaciar-carrito">Vaciar Carrito</button><br>
            <button class="btn" id="pedir-carrito">Pedir Carrito</button><br><br>
            <p id="precio-final">Precio Final: S/. 0.00</p>
        </div>
        <br><br>
        
        <?php
        include 'piedepagina.php';
        ?>

    </body>
    </html>
