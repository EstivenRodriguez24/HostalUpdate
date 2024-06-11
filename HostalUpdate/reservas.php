<!DOCTYPE html>
<HTML lang="es">
    <HEAD>
        <TITLE>Administración Hotel</TITLE>
        <?php //Metaetiquetas globales importadas
            include ('metaetiquetas-generales.php');
        ?>
        <META name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!--Última revisión del sitio-->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de reservas</title>
        <!-- Aquí puedes incluir tus enlaces a CSS, fuentes, etc. -->
        <style>
            body {
                font-family: 'Century Gothic', Century Gothic;
                background-color: #011925;
                margin: 0;
                padding: 0;
            }

            .formulario {
                margin-top: 50px; /* Ajusta la distancia del formulario desde la parte superior */
                margin-bottom: 50px; /* Ajusta la distancia del formulario desde la parte inferior */
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #3591C9;
                width: 70%; /* Ancho del formulario */
                max-width: 500px; /* Ancho máximo del formulario */
                margin: 50px auto; /* Centra el formulario horizontalmente */
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .formulario h2 {
                margin-bottom: 20px;
                text-align: center;
            }

            .formulario label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            .formulario input[type="text"],
            .formulario input[type="search"] {
                width: calc(100% - 20px);
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .formulario input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #1c6264;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .formulario input[type="submit"]:hover {
                background-color: #1a7402 
              ;
            }
        </style>
    </head>
    <body>
        <?php
            include ('titulo.php');
            include ('menu-principal.php');
        ?>
        <div class="formulario">
            <form action="url_destino.php" method="post"> <!-- Modifica la URL de destino -->
                <h2>Buscar reserva</h2>
                <label for="nombre_cliente">Nombre del Cliente</label>
                <input type="text" id="nombre_cliente" name="nombre_cliente" placeholder="Ingrese el nombre del cliente">

                <label for="id_cliente">ID de Cliente</label>
                <input type="text" id="id_cliente" name="id_cliente" placeholder="Ingrese el ID de cliente">

                <label for="numero_reserva">N° de Reserva</label>
                <input type="text" id="numero_reserva" name="numero_reserva" placeholder="Ingrese el número de reserva">

                <input type="submit" value="BUSCAR">
            </form>
        </div>
    </body>
</html>
