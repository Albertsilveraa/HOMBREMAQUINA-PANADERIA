<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ingresar Usuario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">

    </head>
    <body>
    <?php
    include 'encabezado.php';
    ?>

        <span class="site-imag"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/97/7762432097_b09238fc-346a-4194-832f-663753e6878e.png?cb=1662436924" height="250" width="300"></span>

        <!-- INTRODUCCION --> 



        <table align="center">
            <tr>
                <th>
                    <div>

                        <h1 class="titulo">Iniciar Sesion</h1>
                        <form class="formulario" >

                            <div>
                                <input type="text" name="usuario" placeholder="Usuario">
                            </div>

                            <div>
                                <input type="password" name="password" placeholder="Contraseña"><br><br>
                                <button type="button">Iniciar Sesion</button>
                            </div>
                        </form>

                        <p>
                            ¿Aun no tienes cuenta? <br>
                            <a href="Registro_Usuario.PHP">Registrate</a>
                        </p>
                    </div>

                </th>

                <th>
                    <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/748/4311115748_cd5d89ed-ec29-438c-9743-ad02843b183a.png?cb=1608288055" height="150" width="300">
                </th>
            </tr>

        </table>
    </div>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br>

    <?php
    include 'piedepagina.php';
    ?>

</body>

</html>		
