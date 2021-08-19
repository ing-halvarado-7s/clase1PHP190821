<?php
//    Mostrar los tres primeros numeros positivos. (los números mayores que 0 son estrictamente positivos.)
echo "Numero: 1<br>";
echo "Numero: 2<br>";
echo "Numero: 3<br>";


//    Mostrar los primeros cincuenta numeros positivos. (los números mayores que 0 son estrictamente positivos.)
// $numero = 1;
// while ($numero<=50) {
//     // echo "Numero: $numero <br>";
//     $numero++;
// }

// ejemplo de funcion para calcular numeros aleatorios
$num = rand(0,1000);
echo $num."<br>";

// Ejercicio propuesto: Mostrar numeros aleatorios entre el 1 y el 20 mientras la respuesta del usuario sea: Si.
$respuesta = "Si";
while ($respuesta=="Si") {
    $num = rand(1,20);
    echo $num."<br>";
    $respuesta = "No";
}

// Ejercicio propuesto: Dado 5 numeros aleatorios entre el 1 y el 20. Calcular y mostrar cuantos son menores o iguales a 10, y cuantos son mayores a 10.
$contador = 1;
$contadorMenor=0;
$contadorMayor=0;
echo "Ejercicio con ciclo <br>";
while ($contador<=5) {

    $num = rand(1,20);
    echo $num."<br>";
    if($num<=10){
        $contadorMenor++;
    }else{
        $contadorMayor++;
    }
$contador++;
}
echo "La cantidad de numeros menores o iguales a 10 es: $contadorMenor y la cantidad de numeros mayores que 10 es $contadorMayor";
?>