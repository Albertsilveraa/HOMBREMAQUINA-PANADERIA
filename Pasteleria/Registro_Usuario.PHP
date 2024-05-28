<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registrate</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">

    </head>
    <body>

    <?php
    include 'encabezado.php';
    ?>


        <br><br>
        <span class="site-imag"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/97/7762432097_b09238fc-346a-4194-832f-663753e6878e.png?cb=1662436924" height="250" width="300"></span>

        <table align="center">

            <tr>
                <th>

                    <div>	
                        <form class="formulario">
                            <fieldset>

                                <div class="form-group">
                                    <input type="text" name="usuario" placeholder="Usuario">
                                </div>

                                <div>
                                    <input type="password" name="password" placeholder="Contraseña">
                                </div>

                                <div class="form-group">

                                    <input type="password" name="password2" placeholder="Confirmar Contraseña">
                                    <br><br>
                                    <button type="button">Registrate</button>
                                </div>
                        </form>

                        <p>
                            ¿Ya tienes cuenta? <br>
                            <a href="Ingresar_Usuario.PHP">Iniciar Sesión</a>
                        </p>

                    </div>

                    </fieldset>
                    </form>	
                </th>

                <th>
                    <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/217/3837693217_4c05142e-8d8c-4b2d-bfd5-cdc81cd77690.png?cb=1601574946" width="300" height="300"> 
                </th>
            </tr>

        </table>

        <br><br>
        <br><br>
        <br><br><br>

        <?php
        include 'piedepagina.php';
        ?>       


    </body>
</html>