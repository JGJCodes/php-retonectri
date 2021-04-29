<?php
// Ejemplo de solución para el reto
 
 function teclado_movil($mensaje){
 
    //Inicializar el teclado
    $key = array(); 
    $char = ord('a');
	$respuesta="";
 
    // Guardo las teclas que corresponden a cada letra 
    for($tecla = 2; $tecla <=9; $tecla++){
        //Todas las teclas tienen 3 letras excepto la 7 y la 9 que tienen 4
        $hasta = ($tecla == 7 || $tecla == 9)? 4 : 3 ;
        for($pulsar = 1; $pulsar <= $hasta; $pulsar){
            $key[$char++] = array('tecla' => $tecla, 'pulsar' => $pulsar++);
        }
    }
 
    //Para el espacio (tecla 0)
    $tecla = 0;
    $pulsar = 1;
    $key[ord(' ')] = array('tecla' => $tecla, 'pulsar' => $pulsar++);
 
    //Transformar string en array
    $letras = str_split ($mensaje);
	$tecla_anterior=0;
    
	foreach($letras as $l){
        //Obtengo la tecla que le corresponde y la cantidad de pulsaciones
        $tecla = $key[ord($l)]['tecla'];
        $pulsar = $key[ord($l)]['pulsar']; 
        //Si es la misma tecla que la anterior va espacio
        if($tecla == $tecla_anterior)
            $respuesta .= ' ';
        //Presiono la tecla la cantidad de veces necesaria
        for($i = 0; $i < $pulsar; $i++){
            $respuesta .= $tecla;
        }
        //Antes de seguir recuerdo a esta tecla como la anterior
        $tecla_anterior = $tecla;
    }
    return $respuesta;
 }
 
?>