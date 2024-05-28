<?php


require_once('conexionBD.PHP');
?>
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | By Code Info</title>
  <link rel="stylesheet" href="CSS3/intranet.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <header class="header">
    <div class="logo">
      <a href="index.PHP">Crumblecaffe</a>
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
        <h1>Crumblecaffe</h1>
        <span>Aqui podras ver los pedidos hechos en la pagina.</span>
        <a href="index.PHP"><button>Learn More</button></a>


      </div>

      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>History</h4>
            <a href="#">See all</a>
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
                      echo "<tr><td>" . $row["id"] . "</td><td>" . $row["tipo"] . "</td><td>" . $row["precio"] . "</td><td>" . $row["cantidad"] . "</td></tr>";
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
            <a href="#">Upload</a>
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
            echo '<span><i class="fa-solid fa-star"></i>' . $row["calidad"] . ' Estrellas </span>';
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