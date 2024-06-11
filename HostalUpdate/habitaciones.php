<!DOCTYPE html>
<HTML lang="es">
	<HEAD>
		<TITLE>Administración Hotel</TITLE>
		<?php //Metaetiquetas globales importadas
			include ('metaetiquetas-generales.php');
		?>
		<META name='revised' content='Tuesday, February 13th, 2017, 13:22 pm' /><!--Última revisión del sitio-->
	</HEAD>

  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Habitaciones</title>
  <style>
      body {
          font-family: 'Century Gothic', Century Gothic;
          background-color: #011925;
          margin: 0;
          padding: 0;
      }

      .tabla-habitaciones {
          background-color: #C95E35;
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
  </style>
  </head>
  <body>
      <?php
          include ('titulo.php');
          include ('menu-principal.php');
      ?>
      <div class="tabla-habitaciones">
          <h2>Habitaciones</h2>
          <table>
              <thead>
                  <tr>
                      <th>N° de habitación</th>
                      <th>Nombre</th>
                      <th>Descripción</th>
                      <th>ESTADO</th> <!-- Nueva columna -->
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>01</td>
                      <td>Habitación Simple</td>
                      <td>Habitación cama sencilla</td>
                      <td>En Uso</td> <!-- Disponibilidad manual -->
                  </tr>
                  <tr>
                      <td>02</td>
                      <td>Habitación Doble</td>
                      <td>Habitación cama doble y televisión</td>
                      <td>Disponible</td> <!-- Disponibilidad manual -->
                  </tr>
                <tr>
                    <td>03</td>
                    <td>Habitación Triple</td>
                    <td>Habitación con cama doble, cama sencilla, televisión y minibar</td>
                    <td>Reservada</td> <!-- Disponibilidad manual -->
                </tr>
                  <tr>
                      <td>04</td>
                      <td>Habitación Doble</td>
                      <td>Habitación cama doble y televisión</td>
                      <td>En Uso</td> <!-- Disponibilidad manual -->
                  </tr>
                  <tr>
                    <td>05</td>
                    <td>Habitación Cuádruple</td>
                    <td>Habitación con 2 camas dobles, televisión y minibar</td>
                    <td>Reservada</td> <!-- Disponibilidad manual -->
                </tr>
                <tr>
                  <td>06</td>
                  <td>Habitación Simple</td>
                  <td>Habitación cama sencilla</td>
                  <td>Disponible</td> <!-- Disponibilidad manual -->
                </tr>
                <tr>
                    <td>07</td>
                    <td>Habitación Cuádruple</td>
                    <td>Habitación con 2 camas dobles, televisión y minibar</td>
                    <td>Disponible</td> <!-- Disponibilidad manual -->
                </tr>
                <tr>
                  <td>08</td>
                  <td>Habitación Simple</td>
                  <td>Habitación cama sencilla</td>
                  <td>Disponible</td> <!-- Disponibilidad manual -->
                </tr>
                <tr>
                  <td>09</td>
                  <td>Habitación Simple</td>
                  <td>Habitación cama sencilla</td>
                  <td>Reservada</td> <!-- Disponibilidad manual -->
                </tr>
                <tr>
                    <td>10</td>
                    <td>Habitación Triple</td>
                    <td>Habitación con cama doble, cama sencilla, televisión y minibar</td>
                    <td>En Uso</td> <!-- Disponibilidad manual -->
                </tr>
              </tbody>
          </table>
      </div>
  </body>
  </html>




