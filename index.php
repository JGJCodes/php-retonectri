<!DOCTYPE html>
<html>
<head>
    <title>Ejercicios PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
	require_once("forms.php");
?>

<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin:auto; padding:auto; width:80%;">
		<h3><strong>Teclado movil</strong></h3>
			<div class="input-field">
				<h3>Por favor rellene todos los campos</h3>
				<form method="GET" action="" >
				
					<div class="form-group">
						<label>Numero de casos:</label>
						<input type="number" class="form-control" name="formnum" style="width:20em;" min="1" max="10"
						required pattern="^[0-9]+" placeholder="1" />
					</div>
					
					<div class="form-group">
						<input type="submit" name="submit_num" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
					
				</form>
				
				<form method="GET" action="" >
					
					<div class="form-group">
						
						<?php echo $formres; ?>
					</div>
					
					<div class="form-group">
						<?php echo "$res"; ?>
					</div>
				</form>
			</div>
			
		
    </div>
    
</div>

<div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin:auto; padding:auto; width:80%;">
		<h3><strong>Secuencias ADN</strong></h3>
			<div class="input-field">
				<h3>Por favor rellene todos los campos</h3>
				<form method="GET" action="" >
				
					<div class="form-group">
						<label>Secuencia ADN 1:</label>
						<input type="text" class="form-control" name="formadn1" style="width:20em;" 
						value="<?php if(isset($adn1)){echo $adn1;} ?>" required pattern="^[a-zA-Z]{}"  placeholder="ATGTCTTCCTCGA" />
					</div>
					<div class="form-group">
						<label>Secuencia ADN 2:</label>
						<input type="text" class="form-control" name="formadn2" style="width:20em;" 
						value="<?php if(isset($adn2)){echo $adn2;}?>" required pattern="^[a-zA-Z]{}" placeholder="ATGTCTTCCTCGA" />
					</div>
					<div class="form-group">
						<input type="submit" name="submit_adn" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
					
					<div class="form-group">
						<label ><?php echo $result; ?></label>			
					</div>
				</form>
			</div>
			
		
    </div>
    
</div>

</body>
</html>