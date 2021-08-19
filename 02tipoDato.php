<?php
    //Declaracion de variables
    $nombre = "Sofia";
    $edad = 15;
    $arreEdad = array(18,17,16,18);
    //Imprimir valor de las variables
    echo "Cadena =  $nombre <br>"; 
    echo "Entero =  $edad <br>"; 
    
    $edad = 'quince';
    echo "Cadena =  $edad <br>"; 
    //Imprimir los valores del arreglo
    print_r($arreEdad);
    echo '<br> primer elemento del arreglo: '.$arreEdad[0];
     

?>