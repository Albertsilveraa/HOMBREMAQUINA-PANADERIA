<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS3/estilosbarra.css">
        <link rel="stylesheet" type="text/css" href="CSS3/estiloscabezera.css">

        <!-- BACGRO UND Y LINKS -->

        <link rel="icon" type="Imagenes/png" href="Imagenes/Logo_Empresa.png">
        <script src="https://kit.fontawesome.com/d596bebcab.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Urbanist&display=swap" rel="stylesheet">


        <!-- RESEÑAS -->
        <link rel="stylesheet" type="text/css" href="CSS3/reseñas.css">
        <script type="text/javascript" src="JS/reseña.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- FOOTER -->
        <link rel="stylesheet" type="text/css" href="CSS3/footer.css">

        <?php
    include 'encabezado.php';
    ?>

    <title>Políticas de Privacidad - Crumble&Flake</title>
    
    <style>
        .body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 2rem;
            animation: fade-in 1s forwards;
        }

        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        header {
            text-align: center;
            margin-bottom: 2rem;
        }

        h1 {

            font-size: 2rem;
            margin-bottom: 0;
        }

        h2 {
            text-align: left;
            font-size: 1.5rem;
            margin-top: 2rem;
            margin-bottom: 0.5rem;
        }

        p {
            
            margin-bottom: 1.5rem;
        }

        footer {
            text-align: center;
            margin-top: 3rem;
            font-size: 0.8rem;
        }

        section:nth-child(even) {
            background-color: #f5f5f5;
            padding: 2rem;
            border-radius: 5px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        section:nth-child(odd) {
            background-color: #fff;
            padding: 2rem;
            border-radius: 1px;
            margin-bottom: 3rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 600px) {
            h1, h2 {
                font-size: 1.5rem;
            }
        }

        .dynamic-title {
            font-size: 50px;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra suave */
            background-color: black; /* Color de fondo */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Sombra elevada */
            text-align: center;
            margin: 50px auto;
            width: fit-content;
        }


    </style>
</head>
<body style="background-color: <?php echo '#' . rand(1000000, 1000000); ?>;">
    <header>
        <h1 class="dynamic-title">Políticas y Privacidad</h1>
    </header>
    
        <section class="section">
            <h2>Información general</h2>
            <p>En Crumble&Flake.com nos tomamos muy en serio la privacidad y la seguridad de nuestros clientes. Esta Política de Privacidad describe cómo recopilamos, utilizamos y protegemos su información personal cuando visita nuestro sitio web.</p>
        </section>

        <section class="section">
            <h2>Recopilación de información</h2>
            <p>Recopilamos información personal que usted nos proporciona directamente cuando interactúa con nuestro sitio web, 
                aplicación móvil, redes sociales, o al realizar compras en nuestra tienda física. Esta información puede incluir, 
                entre otros, su nombre, dirección de correo electrónico, dirección postal, número de teléfono y detalles de pago. 
                Además, podemos recopilar información automáticamente a través del uso de cookies y tecnologías similares cuando 
                visita nuestro sitio web. Esta información puede incluir su dirección IP, tipo de navegador, páginas visitadas, y 
                otra información de uso del sitio.</p>
        </section>

        <section class="section">
            <h2>Uso de la Información</h2>
            <p>Utilizamos la información recopilada para brindarle nuestros servicios, procesar sus pedidos, responder a sus 
                consultas y proporcionarle información relevante sobre nuestros productos y promociones. También podemos utilizar 
                la información para mejorar y personalizar su experiencia con nosotros, así como para fines de análisis y marketing.
            </p>
        </section>

        <section class="section">
            <h2>Seguridad de la Información</h2>
            <p>Tomamos medidas razonables para proteger la información personal que recopilamos y almacenamos, incluidas medidas de 
                seguridad físicas, electrónicas y administrativas. Asimimo, garantizamos la seguridad absoluta de la 
                información transmitida a través de nuestra pagina web y almacenada en nuestros sistemas.
            </p>
        </section>

        <section class="section">
            <h2>Contacto</h2>
            <p>Si tiene alguna pregunta sobre esta Política de Privacidad o sobre cómo manejamos su información personal, no dude en 
                ponerse en contacto con nosotros a través de correo <strong>crumble&flake@corp.com</strong>, como tambien puedes comunicarnos tu opinion
                entrando en la parte inferior a reseñas.</p>
        </section>

</body> 

    <?php
    include 'piedepagina.php';
    ?>