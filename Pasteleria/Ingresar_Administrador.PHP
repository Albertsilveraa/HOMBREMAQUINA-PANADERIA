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

    <?php
    include 'piedepagina.php';
    ?>


</body>
</html>