<?php 

$id_estado =$_GET['id_estado'];
$nombre_estado =$_GET['nombre_estado'];

?>
<html>
	<head>
		<title>MODIFICAR ESTADO</title>
	</head>
	<body>
		<form action = "modificarEstado.php" METHOD="POST">
			<!--Cajas de texto !-->
				
			<label>Id Estado</label>
			<input TYPE ="TEXT" NAME = "id_estado" 
			value = <?php echo "".$id_estado."" ?> 
			/>
			</br>
				
			<label>Nombre de Estado </label>
			<input TYPE ="TEXT" NAME = "nombre_estado" 
			value = <?php 
			echo "".$nombre_estado."" ?> />
			</br>
				
			<!--Boton de envio !-->
			<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
	
	</body>
</html>