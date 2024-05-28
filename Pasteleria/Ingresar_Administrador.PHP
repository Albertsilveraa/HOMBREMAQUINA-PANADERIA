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

    <?php
    include 'encabezado.php';
    ?>
      
    <br>
    <br>
 
      
        <span class="site-imag"><img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/97/7762432097_b09238fc-346a-4194-832f-663753e6878e.png?cb=1662436924" height="250" width="300"></span>

        
        <table align="center">
    <tr>
        <th>
            <form action="ingresoadmin.php" method="POST">
                <p>User Admin:
                    <input type="text" name="txtUsu" required>
                </p>

                <p>Contraseña:
                    <input type="password" name="txtCon" required>
                </p>

                <p>
                    <input type="submit" name="btnIng" value="Iniciar sesión">
                </p>
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

    <?php
    include 'piedepagina.php';
    ?>


</body>
</html>