<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea una función que admite como parámetro una matriz escalar de una dimensión
    y muestre por pantalla:
     El valor máximo contenido y su posición en la matriz.
     El valor mínimo contenido y su posición en la matriz.
     El valor medio de todos los valores contenidos en la matriz. -->
    <?php
    include "funlib.php";

    echo "<table border = 1>";
    echo "<tr>";
    echo "  <td> Pablo  </td>";
    echo "  <td> Machado </td>";
    echo "</tr>";
    echo "<td> " . "Ejercicio" . "</td>";
    echo "<td> " . "anexo3-pag29-ej3" . "</td>";
    echo "</tr>";
    echo "<td> " . "maximoMinimoMedia();" . "</td>";
    echo "<td> " . "El valor máximo es 10 y su posición es 9
    La media es 5.5
    El valor mínimo es 0 y su posición es 0" . "</td>";
    echo "</tr>";
    echo "</table>";


    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $max = 0;
    $min = 0;
    $media = 0;
   
    maximoMinimoMedia($array);
    ?>
</body>

</html>