<?php

// Ejemplo de solución para el ejercicio biologo
 function bases_adyacentes($adn1,$adn2){
	//variable que almacena el conjunto ordenado de bases adyacentes de mayor tamaño que es común en ambas secuencias
	$bases_adyacentes = "";
 
	/**Utilizamos dos ciclo FOR para realizar la búsqueda. El enfoque
      que utilizo es encontrar la mayor cadena en la variable adn1
      que tambien se encuentra en la variable adn2 
      el primer FOR irá acotando de derecha a izquierda el rango de búsqueda
      el contador comienza en el valor de la longitud de la variable adn1 va disminuyendo
	  
	  el segundo FOR irá acotando de izquierda a derecha el rango 
      de búsqueda. El contador comienza en cero y se va incrementando
      sin llegar a ser igual que el valor actual de la variable r
       que viene acotando por la derecha
    **/
 
	for ($i = strlen($adn1); $i>=0; $i--) {    
            
        for ($j=0; $j<$i; $j++) {
            
			//almacenar el fragmento de $adn1 por el rango de $j y $i
			$subadn1=substr($adn1,$j,$i);
			
            /**aquí verificamos dos condiciones: 
            1. que la porción de la cadena extraida de la variable adn1 
                se encuentra en la variable adn2
			2. que la longitud de la ultima coincidencia encontrada
				sea menor a la longitud de la nueva coincidencia encontrada
            **/
            if (strstr($adn2,$subadn1) && strlen($bases_adyacentes)<strlen($subadn1) ) { 
                //si se cumplen ambas condiciones almacenamos el nuevo valor   
				$bases_adyacentes = $subadn1;                
            }     
        }        
    }
	
	return $bases_adyacentes;
 }
 
?>