<?php 

$id_ciudad =$_GET['id_ciudad'];
$nombre_ciudad =$_GET['nombre_ciudad'];
$estado_ciudad =$_GET['estado_ciudad'];

?>
<html>
	<head>
		<title>MODIFICAR CIUDADES</title>
	</head>
	<body>
		<form action = "modificarCiudad.php" METHOD="POST">
			<!--Cajas de texto !-->
				
			<label>Id Ciudad</label>
			<input TYPE ="TEXT" NAME = "id_ciudad" 
			value = <?php echo "".$id_ciudad."" ?> 
			/>
			</br>
				
			<label>Nombre de Ciudad </label>
			<input TYPE ="TEXT" NAME = "nombre_ciudad" 
			value = <?php 
			echo "".$nombre_ciudad."" ?> />
			</br>
			
			<label>Estado Ciudad</label>
			<input TYPE ="TEXT" NAME = "estado_ciudad" 
			value = <?php 
			echo "".$estado_ciudad."" ?> />
			</br>
				
			<!--Boton de envio !-->
			<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
	
	</body>
</html>