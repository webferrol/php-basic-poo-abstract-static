<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>Alumnos</title>
</head>
<body>
  <h1 class="title">Usuarios</h1>
  <table style="border-style:solid; border-collapse: collapse">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Años</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?=$xurxo->getNombre()?>
        </td>
        <td>
        <?=$xurxo->getApellidos()?>
        </td>
        <td>
        <?=$xurxo->dimeEdad()?>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>