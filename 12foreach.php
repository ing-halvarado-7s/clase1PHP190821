<?php
    // Uso 1. Foreach.
    // foreach (variable_array as $valor) sentencias ...
    // Aquí recorremos todos los elementos de un array y en cada interacción del ciclo va colocando el valor que lee del arreglo en la variable $valor. Veamos un ejemplo:
    $frutas = ['Mango', 'Piña', 'Uva'];

    foreach ($frutas as $valor) {
        echo $valor;
    }
    echo "<br>";

    // Uso 2. Foreach
    // Esta es la segunda sintaxis y es un poco más completa, se usa para recorrer arreglos asociativos. 
    // foreach (variable_array as $clave => $valor)sentencias ..
    // .
    // Con esta sintaxis podemos acceder al valor de cada posición del arreglo en la variable $valor y a su nombre por medio de la variable $clave.. Veamos un ejemplo:
    $comidas = [
        'desayuno' => 'cereal',
        'almuerzo' => 'pizza',
        'cena' => 'ensalada'
      ];
    
      foreach ($comidas as $llave => $valor) {
         echo 'Para el ' . $llave . ', comere ' . $valor . '<br>';
      }



?>