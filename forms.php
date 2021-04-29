<?php

	//Elementos del ejercicio 1 teclado movil
	include("teclado.php");
	
	$num = 0; //variable que almacena el numero de casos
	$res="";//Variable que almacena los resultados del segundo formulario
	$formres="";//Variable que almacena los resultados del primer formulario

	//Verifico si se envio el numero de casos
	if(ISSET($_GET['submit_num'])){
		$num = $_GET['formnum'];
		
		//crea el input para almacenar el numero de casos
		$formres.='<input type="hidden" name="formnum" value="'."$num".'" /><br>';
		
		//Ciclo for crea un nuevo formulario para ingresar los casos de textos
		for($n=1;$n<=$num;$n++){
			$formres .= '<label>Caso #'."$n".':</label>
						<input type="text" class="form-control" name="formcaso'."$n".'" style="width:20em;"
						 required pattern="^[a-zA-Z]{}"  placeholder="hola" /><br>';
		}
		
		//crea el boton del segundo formulario de los casos de textos
		$formres.='<input type="submit" name="submit_res" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />';
	}
	
	//Verifico si se enviaron los casos de texto
	if(ISSET($_GET['submit_res'])){
		$num = $_GET['formnum'];
		
		//Ciclo for recupera los casos para procesarlos por separado para despues almacenarlos en $res
		for($n=1;$n<=$num;$n++){
			$g=$_GET['formcaso'."$n"];
			$m=teclado_movil($g);
			$res.= "<label> Caso #"."$n".": "."$g"." => "."$m"." </label> </br>";
		}
	}
	
	
	
	//Elementos del ejercicio 2 el biologo
	include("secuencias_adn.php");
	
	$adn1 = ""; //almacena la primera secuencia de adn
	$adn2 = ""; //almacena la segunda secuencia de adn
	$result=""; //almacena los resultados

	//Verifico si se enviaron las secuencias adn
	if(ISSET($_GET['submit_adn'])){
		$adn1 = $_GET['formadn1'];
		$adn2 = $_GET['formadn2'];
		
		$bases=bases_adyacentes($adn1,$adn2);
		
		$result= "el conjunto ordenado de bases adyacentes es: ".$bases;
		
	}
?>