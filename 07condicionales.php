<?php
    $diaSemana = 50;
    $color = array ('azul','rosa','naranja','marron','negro');

    // condicional simple
    if ($diaSemana==1) {
        echo "Hoy es lunes y voy a usar una camisa de color $color[0] <br>";
    }elseif($diaSemana==2){
        echo "Hoy es martes y voy a usar una camisa de color $color[1] <br>";
    }elseif($diaSemana==3){
        echo "Hoy es miercoles y voy a usar una camisa de color $color[2] <br>";
    }elseif($diaSemana==4){
        echo "Hoy es jueves y voy a usar una camisa de color $color[3] <br>";
    }elseif($diaSemana==5){
        echo "Hoy es viernes y voy a usar una camisa de color $color[4] <br>";
    }else{
        echo "No se que dia es hoy, me pondre una camisa multicolor<br>";
    }
    // condicional con else
    
    
    // condicional con elseif

    // condicional  con operadores lógicos y relacionales
    $edad = 21;
    $pais = "USA";
    if (($edad>=21) && ($pais=="USA")) {
        echo "Es mayor de edad<br>";
    } else {
        echo "Es menor de edad<br>";
    }
    
    // Ana estudia en la UPTYAB y sacó 56/100 en Paradigma de programación. Mostrar si Ana está aprobada o reprobada. PER
    $nota = 30;
    if ($nota >= 56) {
        echo "Ana esta aprobada.<br>";
        
    }elseif($nota>=26 && $nota<=55) {
        echo "Ana tiene derecho a PER.<br>";
    }else {
        echo "Ana esta reprobada.<br>";
    }
    
?>