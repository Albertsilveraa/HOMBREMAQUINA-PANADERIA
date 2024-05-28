<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">

    </head>
    <body>
    <?php
    include 'encabezado.php';
    ?>

        <div class="general">
            <div class="logo-ses">
                <span class="site-imag"><img src="Imagenes/cook.svg" ></span>
            </div>

            <br><br>
            <div class = "tipo">
                <h2 align="center">Seleccion el tipo de ingreso:</h2>
                <section class="eleccion sesion">
                    <br>

                    <div class="ico-sesi">

                        <div class="sesio">
                            <a href="Ingresar_Usuario.php"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/427/4304447427_54b254de-3fb5-41ed-827d-d020b37f66b3.png?cb=1608158588"></a>
                        </div>

                        <div class="sesio">
                            <a href="Ingresar_Administrador.php"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/729/4304502729_46f79922-6135-4070-b18d-d3778a3ddf86.png?cb=1608159206"></a>
                        </div>

                    </div>

                </section>
            </div>
        </div>


        <br><br>
        <br><br>
        <br><br><br>

        <?php
    include 'piedepagina.php';
    ?>


    </body>
</html>