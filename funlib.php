<?php
     function maximoMinimoMedia($array) //Determina el valor maximo, minimo y la media del array
    
     {
         $max = 0; //Valor maximo
         $min = 0; //Valor minimo
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
         echo "La media es $media <br>";
 
         if (array_search($min, $array) == 0) {
             echo "El valor mínimo es $min y su posición es 0 <br>";
         } else if (array_search($min, $array) == false) {
             echo "El valor mínimo es $min y su posición no existe en el array <br>";
         } else {
             echo "El valor mínimo es $min y su posición es " . array_search($min, $array) . "<br>";
         }
     }
?>