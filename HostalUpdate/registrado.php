<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva exitosa</title>
    <style>
        body {
            font-family: 'Century Gothic', Century Gothic;
            background-color: #011925;
            margin: 0;
            padding: 0;
        }

        .tabla-reserva {
            background-color: #08FF00;
            margin-top: 50px;
            margin-bottom: 60px;
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tabla-reserva h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            text-align: center;
            padding: 2px;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
            font-size: 16px;
        }

        .reservar-button {
            padding: 8px 12px;
            background-color: #1C6264;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .reservar-button:hover {
            background-color: #1a7402;
        }

        .texto-hola {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .boton {
            padding: 10px 20px;
            background-color: #1C6264;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-right: 10px;
        }

        .boton:hover {
            background-color: #1a7402;
        }
    </style>
</head>
<body>
    <div class="tabla-reserva">
        <h2>Has realizado tu reserva</h2>
        <div class="texto-hola">Su número de reserva es 20241104</div>
        <div style="text-align: center; margin-bottom: 20px;">
            <button class="boton" onclick="window.location.href='index.php'">Inicio</button>
            <button class="boton" onclick="window.print()">Imprimir</button>
        </div>
    </div>
</body>
</html>
