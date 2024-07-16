<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ingresar Usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
    <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
    <link rel="stylesheet" type="text/css" href="CSS3/footer.css">
    <link rel="stylesheet" type="text/css" href="CSS3/valoracion.css">

    <?php
    include 'encabezado.php';
    ?>

</head>
<body>
    <br><br>
    <h1 class="dynamic-title">Valoraciones</h1>

    <section class="bodyreseña">

        <div class="containerreseña">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7943.889591717086!2d-122.32832326647113!3d47.61613423628258!2m3!1f0!
            2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015337cacbbd5%3A0x8e5491597d62f801!2sCrumble%20%26%20Flake%20P%C3%A2tisserie!5e0!3m2!1ses-419!2
                spe!4v1716875533842!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!3m2!1ses-419!2spe!4v1719966711063!5m2!1ses-419!2spe!6m8!1m7!1sQ3E0BRV9tDGSaQy-F3M_DA!2m2!1d47.61771739451583!2d-122.3264225432706!3f158.46110896619592!4f2.65409841008308!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="review-form">
                <h2>Dejanos tu Reseña</h2>
                <form action="ProcesaReseña.php" method="post">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="comments">Comentarios:</label>
                    <textarea id="comments" name="comments" rows="4" required></textarea>

                    <label>Puntuación:</label>
                    <div class="star-rating">
                        <input type="radio" id="star5" name="rating" value="5" required>
                        <label for="star5">&#9733;</label>
                        <input type="radio" id="star4" name="rating" value="4">
                        <label for="star4">&#9733;</label>
                        <input type="radio" id="star3" name="rating" value="3">
                        <label for="star3">&#9733;</label>
                        <input type="radio" id="star2" name="rating" value="2">
                        <label for="star2">&#9733;</label>
                        <input type="radio" id="star1" name="rating" value="1">
                        <label for="star1">&#9733;</label>
                    </div>

                    <button type="submit" name="submit">Enviar Reseña</button>
                </form>
            </div>
        </div>
    </section>

    <?php
    include 'piedepagina.php';
    ?>

</body>

</html>