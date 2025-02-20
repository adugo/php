<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
 		<div class="select-container">
			<h1>Numero de Usuarios FTP que desea</h1><br>
			<select name="unftp" id="unftp" class="select-box">
				<option selected="selected" value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
			</select>
		</div>
	</form>
	<form action="exec.php" method="post">
		<div class="formulario" style="left: 38%" id="div1ftpu">
			
		<h1>Usuario FTP WP</h1>
			
			<div class="username">
				<input type="text" name="user[]">
				<label>Usuario WP</label>
			</div>
			
			<div class="username">
				<input type="password" name="pass[]" >
				<label>Contraseña de usuario WP</label>
			</div>
			
		</div>
		<div class="formulario" style="left: 62%" id="div2ftpu">
		<h1>Usuario FTP NC</h1>

			<div class="username">
				<input type="text" name="user[]">
				<label>Usuario NC</label>
			</div>

			<div class="username">
				<input type="password" name="pass[]" >
				<label>Contraseña de usuario NC</label>
			</div>

		</div>
		<input type="submit" id="btnFTP" value="VsFTP" disabled>		
	</form>
</body>
<script type="text/javascript">
	$(function() {
	    $('#unftp').change(function(){
	        $('#div1ftpu').hide();
	        $('#div2ftpu').hide();
			var n = $('#unftp').find(":selected").text();
			switch(n) {
			  case '1':
		        $('#div1ftpu').show();
				$('#div1ftpu').css('left', '50%');
				$("#btnFTP").prop('disabled', false);	
				$('#btnFTP').show();	        		        
			    break;
			  case '2':
		        $('#div1ftpu').show();
				$('#div1ftpu').css('left', '38%');
		        $('#div2ftpu').show();
				$("#btnFTP").prop('disabled', false);	
				$('#btnFTP').show();	        
			    break;
			  default:
		        $('#div1ftpu').hide();
		        $('#div2ftpu').hide();
				$('#btnFTP').hide();		        
			} 				    	
	    });
	});	
</script>
</html>