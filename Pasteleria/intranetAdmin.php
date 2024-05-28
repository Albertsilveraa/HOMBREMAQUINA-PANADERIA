<?php
require_once('conexionBD.PHP');
?>

<span style="font-family: verdana, geneva, sans-serif;">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | By Code Info</title>
  <link rel="stylesheet" href="CSS3/intranet.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" media="all">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="index.PHP">Crumble&Flake</a>
    </div>

    <div class="header-icons">
      <i class="fas fa-bell"></i>
      <div class="account">
        <img src="imagenes/chef2.jpg" alt="">
        <h4>Jorge Luis Blanco</h4>
      </div>
    </div>
  </header>
  <div class="container">
    <nav>
      <div class="side_navbar">
        <span>Main Menu</span>
        <a href="#" class="active">Dashboard</a>
       

        <div class="links">
          <span>Quick Link</span>
          <a href="https://www.paypal.com/pe/home">Paypal</a>
          
        </div>
      </div>
    </nav>

    <div class="main-body">
      <h2>Dashboard</h2>

      <div class="promo_card">
        <h1>Crumble&Flake</h1>
        <span>¡Bienvenido al Dashboard Administrativo de Crumble&Flake! Este es tu espacio exclusivo diseñado para brindarte una 
          visión completa y deliciosa de todas las operaciones dentro de nuestra pastelería. Desde aquí, podrás sumergirte en el 
          mundo dulce de tus productos, clientes y ventas.</span>
          <br><br>
        <button onclick="toggleInfo()">Learn More</button>
        <div class="info-container" id="info">
          <p>En Crumble&Flake, entendemos que la excelencia en la pastelería es un arte y una ciencia. Este dashboard ha sido creado 
            con ese espíritu en mente, ofreciéndote herramientas poderosas para gestionar y mejorar cada aspecto de tu negocio. <br><br>Desde
             el seguimiento en tiempo real de las ventas de tus pasteles más populares hasta la gestión de inventario y el análisis 
             de tendencias de consumo, aquí encontrarás todo lo que necesitas para tomar decisiones informadas y llevar tu pastelería 
             al siguiente nivel. <br><br>Como administrador de Crumble&Flake, tu pasión y dedicación son la clave de nuestro éxito. Este dashboard 
             está diseñado para apoyarte en cada paso del camino, proporcionándote información valiosa y herramientas intuitivas para 
             ayudarte a prosperar en el mundo de la pastelería. <br><br>Estamos encantados de tenerte aquí y emocionados de acompañarte en este 
             viaje delicioso. ¡Bienvenido al dulce mundo de Crumble&Flake!</p>
        </div>


      </div>

      <script>
        function toggleInfo() {
            var info = document.getElementById("info");
            if (info.style.display === "none") {
                info.style.display = "block";
            } else {
                info.style.display = "none";
            }
        }
    </script>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>Pedidos</h4>
            <a href="#">Ver todos</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>tipo</th>
                <th>precio</th>
                <th>cantidad</th>
              </tr>
            </thead>
            <tbody>
            <?php
              // Consulta SQL para seleccionar datos
              $sql = "SELECT * FROM tb_compras";
              $result = $conn->query($sql);

              // Mostrar datos en la tabla
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["tipo"] . "</td><td>" . 
                      $row["precio"] . "</td><td>" . $row["cantidad"] . "</td></tr>";
                  }
              } else {
                  echo "<tr><td colspan='4'>No hay clientes</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>

        <div class="list2">
          <div class="row">
            <h4>Usuarios</h4>
            <a href="#">Actualizar</a>
          </div>
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
              </tr>
            </thead>
            <?php
              // Consulta SQL para seleccionar datos
              $sql = "SELECT * FROM tb_usuarios";
              $result = $conn->query($sql);

              // Mostrar datos en la tabla
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Apellido"] . "</td><td>" . $row["Correo"] . "</td></tr>";
                  }
              } else {
                  echo "<tr><td colspan='4'>Todavia no existen usuarios</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="sidebar">
     
      <div class="balance">
      <i class="fa-solid fa-newspaper" style="font-size: 50px;"></i>&nbsp;


        <div class="info">
        <?php
    

    $sql = "SELECT reseña, calidad FROM tb_reseñas";

  
    $resultado = $conn->query($sql);

   
    if ($resultado->num_rows > 0) {
        
        while($row = $resultado->fetch_assoc()) {
            echo '<h5>' . $row["reseña"] . '</h5>';
            echo '<span><i class="fa-solid fa-star"></i>' . 
            $row["calidad"] . ' Estrellas </span>';
        }
    } else {
      
        echo "No hay reseñas disponibles";
    }


    ?>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
</span>