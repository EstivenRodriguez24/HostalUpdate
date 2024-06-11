<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración Hotel</title>
    <link rel="stylesheet" href="./CSS/estilos.css">
</head>

<body>
    <header id="cajaTitulo">
        <figure>
            <img src="./img/Logotipo.png" alt="Mi Logo" title="Logotipo del sitio web">
            <figcaption>
                <h1 id="titulo">Panel Principal</h1>
            </figcaption>
        </figure>
    </header>

    <nav id="cajaMenuPrincipal">
        <ul>
            <li><a href="./index.php" title="Inicio">Inicio</a></li>
            <li><a href="./clientes.php" title="Clientes">Clientes</a></li>
            <li><a href="./habitaciones.php" title="Habitaciones">Habitaciones</a></li>
            <li><a href="./reservas.php" title="Reservas">Consultar reservas</a></li>
          <li><a href="./form-clientes.php" title="form-clientes">Nueva reserva</a></li>
        </ul>
    </nav>
    <style>
        body {
            font-family: 'Century Gothic', Century Gothic;
            background-color: #011925;
            margin: 0;

          
            padding: 0;
        }
      /* Estilos para la tabla del campo de selección de fecha */
          .tabla-fecha {
              background-color: #f8ac3d;
              margin-top: 50px;
              margin-bottom: 50px;
              width: 80%;
              max-width: 400px; /* Ancho máximo ajustado para una mejor presentación */
              margin: 50px auto;
              border-radius: 10px;
              border-collapse: collapse; /* Eliminar el espacio entre las celdas */
          }

          .tabla-fecha td {
              padding: 8px;
              text-align: center;
          }

          .tabla-fecha label {
              display: block;
              font-weight: bold;
              margin-bottom: 5px;
          }

          .tabla-fecha input[type="date"] {
              width: 100%;
              padding: 8px;
              border: 1px solid #ccc;
              border-radius: 5px;
              box-sizing: border-box;
              font-size: 16px;
          }
      
        .tabla-habitaciones {
            background-color: #f8ac3d;
            margin-top: 50px;
            margin-bottom: 50px;
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tabla-habitaciones h2 {
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
            padding: 10px;
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
    </style>
</head>
<body>
  <!DOCTYPE html>
  <html lang="es">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario</title>
  <link rel="stylesheet" href="styles.css"> <!-- Vinculamos el archivo de estilos CSS -->
  </head>
  <body>

  </body>
  </html>
  <table class="tabla-fecha">
      <tr>
          <td>
              <label for="fecha">Selecciona una fecha:</label>
              <input type="date" id="fecha" name="fecha">
          </td>
      </tr>
  </table>
    <div class="tabla-habitaciones">
        <h2>Habitaciones disponibles</h2>
        <table>
            <thead>
                <tr>
                    <th>N° de habitación</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Reservar</th> <!-- Cambio de título de la columna -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Habitación Simple</td>
                    <td>$ 50.000 x noche</td>
                    <td>Habitación cama sencilla</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Habitación Doble</td>
                    <td>$ 75.000 x noche</td>
                    <td>Habitación cama doble y televisión</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
              <tr>
                  <td>03</td>
                <td>Habitación Triple</td>
                  <td>$100.000 x noche</td>
                <td>Habitación con cama doble, cama sencilla, televisión y minibar</td>
                  <td><button class="reservar-button" onclick="window.location.href='form-clientes'">Reservar</button></td>
              </tr>
                <tr>
                    <td>04</td>
                    <td>Habitación Doble</td>
                    <td>$ 75.000 x noche</td>
                    <td>Habitación cama doble y televisión</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes'">Reservar</button></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Habitación Cuádruple</td>
                    <td>$140.000 x noche</td>
                    <td>Habitación con 2 camas dobles, televisión y minibar</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Habitación Simple</td>
                    <td>$ 50.000 x noche</td>
                    <td>Habitación cama sencilla</td>
                    <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
                </tr>
              <tr>
                  <td>07</td>
                  <td>Habitación Cuádruple</td>
                  <td>$140.000 x noche</td>
                  <td>Habitación con 2 camas dobles, televisión y minibar</td>
                  <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
              </tr>
              <tr>
                  <td>08</td>
                  <td>Habitación Simple</td>
                  <td>$ 50.000 x noche</td>
                  <td>Habitación cama sencilla</td>
                  <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
              </tr>
              <tr>
                  <td>09</td>
                  <td>Habitación Simple</td>
                  <td>$ 50.000 x noche</td>
                  <td>Habitación cama doble y televisión</td>
                  <td><button class="reservar-button" onclick="window.location.href='form-clientes.php'">Reservar</button></td>
              </tr>
              <tr>
                  <td>10</td>
                <td>Habitación Triple</td>
                  <td>$100.000 x noche</td>
                <td>Habitación con cama doble, cama sencilla, televisión y minibar</td>
                  <td><button class="reservar-button" onclick="window.location.href='form-clientes'">Reservar</button></td>
              </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
