<?php
	include("teclado.php");
	
	$msj = "";
	$res="";

	if(ISSET($_GET['submit'])){
		$msj = $_GET['formmsj'];
		
		$m=teclado_movil($msj);
		
		$res= $msj." => ".$m;
		
	}
?>