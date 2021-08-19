<?php

	// Funciones para strings
	$mensaje = "Hoy voy a aprender mucho";

	//longitud
	echo strlen($mensaje);

	echo "<br>";
	//Número de palabras
	echo str_word_count($mensaje);

	echo "<br>";
	//Reversa
	echo strrev($mensaje);

	echo "<br>";
	//Encontrar texto strpos(cadenaTotal, cadenaBuscar);
    //Devuelve la posición de la primera letra de la cadenaBuscar.
	echo strpos($mensaje, "aprender");

	echo "<br>";
	//Reemplazar texto str_replace(cadenaBuscar, cadenaReemplazar);
	echo str_replace("aprender", "nadar", $mensaje);

	echo "<br>";
	//Convertir a minúsculas
	echo strtolower($mensaje);	

	echo "<br>";
	//Convertir a mayúsculas
	echo strtoupper($mensaje);

	echo "<br>";
	//Comparar cadenas
    //Si el resultado es cero las cadenas son iguales, sino son diferentes
	echo strcmp("a", "a");
	
	echo "<br>";
	//Substraer cadena substr(cadenaTotal, desde, hasta);
	echo substr($mensaje, 10, 7);
	
	echo "<br>";
	//Remover espacios en blanco
	echo trim("        hola     soy      Sofia");





?>