<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crumble&Flake</title>
    <link rel="stylesheet" href="CSS3/estiloscabezera.css"> <!-- Si tienes un archivo de estilos CSS -->
</head>

<body>
    <nav class="main-header">
        <div class="container">
            <ul class="sidebar">
                <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z" />
                        </svg></a></li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Comprar</a></li>
                <li><a href="#">Carrito</a></li>
                <li><a href="#">Iniciar Sesion</a></li>
            </ul>
            <ul>
                <li id="logo-header">
                    <span class="site-name">Crumble&Flake.com</span>
                    <span class="site-desc">Pasteles / Postres / Bocaditos</span>
                </li>
                <li class="hideOnMobile"><a href="#">Home</a></li>
                <li class="hideOnMobile"><a href="#">Comprar</a></li>
                <li class="hideOnMobile"><a href="#">Carrito</a></li>
                <li class="hideOnMobile"><a href="#">Iniciar Sesion</a></li>
                <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
                            <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z" />
                        </svg></a></li>
            </ul>
        </div>
    </nav>
    <script src="JS/header.js"></script>
</body>

</html>