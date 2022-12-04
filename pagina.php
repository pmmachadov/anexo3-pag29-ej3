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
    $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    $max = 0;
    $min = 0;
    $media = 0;
    function maximoMinimoMedia($array) //Determina el valor maximo, minimo y la media del array
    {
        $max = 0; //Valor maximo
        $min = 0;   //Valor minimo
        $media = 0; //Valor medio
        for ($i = 0; $i < count($array); $i++) { //Recorre el array
            if ($array[$i] > $max) { //Si el valor del array es mayor que el maximo
                $max = $array[$i]; //El maximo es el valor del array
            }
            if ($array[$i] < $min) { //Si el valor del array es menor que el minimo
                $min = $array[$i]; //El minimo es el valor del array
            }
            $media += $array[$i]; //Suma todos los valores del array
        }
        $media = $media / count($array); //Divide la suma de los valores entre el numero de valores

        echo "El valor máximo es $max y su posición es " . array_search($max, $array) . "<br>";
        echo "El valor mínimo es $min y su posición es " . array_search($min, $array) . "<br>";
        echo "El valor medio es $media";
    }
    maximoMinimoMedia($array);
?>
</body>

</html>