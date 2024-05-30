<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ingresar Usuario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">
    <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
    <link rel="stylesheet" type="text/css" href="CSS3/footer.css">

    <?php
    include 'encabezado.php';
    ?>

    <style>
        .bodyreseña {
            font-family: Urbanist, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
            background-color: #f2f2f2;
        }

        .containerreseña {
            display: flex;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .review-form,
        .map {
            width: 300px;
            margin: 10px;
        }

        .review-form h2 {
            margin-bottom: 20px;
        }

        .review-form label {
            display: block;
            margin-bottom: 5px;
        }

        .review-form input,
        .review-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .review-form textarea {
            resize: vertical;
            max-height: 200px;
            min-height: 80px;
        }

        .review-form .star-rating {
            display: flex;
            justify-content: space-between;
            direction: rtl;
            margin-bottom: 10px;
        }

        .review-form .star-rating input {
            display: none;
        }

        .review-form .star-rating label {
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }

        .review-form .star-rating input:checked~label,
        .review-form .star-rating input:checked~label~label {
            color: gold;
        }

        .review-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: orange;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .review-form button:hover {
            background-color: orange;
        }

        .map iframe {
            width: 100%;
            height: 435px;
            border-radius: 4px;
        }

        .dynamic-title {
            font-size: 50px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            /* Sombra suave */
            background-color: black;
            /* Color de fondo */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            /* Sombra elevada */
            text-align: center;
            margin: 5px auto;
            width: fit-content;
        }

    </style>

</head>

<body>


    <h1 class="dynamic-title">Valoraciones</h1>

    <section class="bodyreseña">

        <div class="containerreseña">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7943.889591717086!2d-122.32832326647113!3d47.61613423628258!2m3!1f0!
            2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549015337cacbbd5%3A0x8e5491597d62f801!2sCrumble%20%26%20Flake%20P%C3%A2tisserie!5e0!3m2!1ses-419!2
                spe!4v1716875533842!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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