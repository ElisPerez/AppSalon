<?php

function obtenerServicios(): array
{
  try {
    // Importar una conexión
    require 'database.php';

    // Escribir código SQL
    $sql = "SELECT * FROM servicios;";
    $consulta = mysqli_query($db, $sql);

    // Array vacío
    $servicios = [];

    // Contador
    $i = 0;

    // Obtener los resultados (parsear la $consulta para que PHP la pueda entender)
    while ($row = mysqli_fetch_assoc($consulta)) {
      $servicios[$i]['id'] = $row['id'];
      $servicios[$i]['nombre'] = $row['nombre'];
      $servicios[$i]['precio'] = $row['precio'];

      $i++;
    }

    // echo "<pre>";
    // var_dump($servicios);
    // var_dump(json_encode($servicios));
    // echo "</pre>";
    // echo "<br>";

    return $servicios;
  } catch (\Throwable $th) {
    //throw $th;
    echo "<pre>";
    var_dump($th);
    echo "</pre>";
  }
};

// obtenerServicios();
