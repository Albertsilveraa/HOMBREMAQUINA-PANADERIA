<!DOCTYPE html>
<html>
    <head>
        <title>Login Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">

    </head>
    <body>
        <nav class="main-header">
            <container>
                <div id= "logo-header">
                    <span class="site-name">Crumble&Flake.com</span>
                    <span class="site-desc">Pasteles / Postres / Bocaditos</span>
                </div>

                <div class="nav_menu">
                    <ul >
                        <li><a href="index.PHP"><img src="https://getconnected.honeywellhome.com/en/sites/getconnected.honeywell.com.en/files/lyric_to_home.png" height="18" width="18" style="vertical-align: middle;"> Home</a></li>

                        <li><a href="Comprar.PHP"><img src="https://icones.pro/wp-content/uploads/2021/05/icone-de-panier-noir.png" width="20" height="20" style="vertical-align: middle;"> Comprar</a></li>

                        <li><a href="Carrito.PHP"><img src="Imagenes/carrito.png" width="40" height="40" style="vertical-align: middle;"> Carrito</a></li>
                        <li><a href="eleccion_sesion.PHP"><button class="nav--button" href="#">Iniciar sesión</button></a></li>


                    </ul>



            </container>
        </nav>

      
    <br>
    <br>
 
      
        <span class="site-imag"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/97/7762432097_b09238fc-346a-4194-832f-663753e6878e.png?cb=1662436924" height="250" width="300"></span>

        
    <script>
        function registrar() {
            var usuario = document.frmRegistro.txtUsu.value;
            var contra = document.frmRegistro.txtCon.value;
            if (usuario == "aronchino" && contra == "123") {
                document.writeln("<p>Hola administrador " + usuario + ".</p>");
            } else {
                document.writeln("<p>Erro de ingreso: " + usuario + " usted, no es el administrador.</p>");
            }
            document.writeln("<a href=‘index.html’>Volver</a>");
                
        }
    </script>
        
    <table align="center">
        <tr>
            <th>
                <form name="frmRegistro">
                    <fieldset>
                        <p>User Admin:
                            <input type="text" name="txtUsu" style="align-self: middle">
                        </p>

                        <p>Contraseña:
                            <input type="password" name="txtCon" style="align-self: middle">
                        </p>

                        <p>
                            <input type="button" name="btnIng" onclick="registrar()" value="Ingresar" style="border-color: green">
                        </p>

                    </fieldset>
                </form>
            </th>

            <th>
                <img src="Imagenes/imagen_administrador.png" width="150" height="150">
            </th>
        </tr>
    </table>


    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

    <footer class="footer-section">

        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, All Right Reserved <a href="index.html">Crumble&Flake</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terminos</a></li>
                                <li><a href="#">Privacidad</a></li>
                                <li><a href="#">Política</a></li>
                                <li><a href="#">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>