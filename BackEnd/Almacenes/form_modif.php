<?php 

$id_almacen =$_GET['id_almacen'];
$nombre_almacen =$_GET['nombre_almacen'];
$ciudad_almacen =$_GET['ciudad_almacen'];

?>
<html>
	<head>
		<title>MODIFICAR ALMACENES</title>
	</head>
	<body>
		<form action = "modificarAlmacen.php" METHOD="POST">
			<!--Cajas de texto !-->
				
			<label>Id Almacen</label>
			<input TYPE ="TEXT" NAME = "id_almacen" 
			value = <?php echo "".$id_almacen."" ?> 
			/>
			</br>
				
			<label>Nombre de Almacen </label>
			<input TYPE ="TEXT" NAME = "nombre_almacen" 
			value = <?php 
			echo "".$nombre_almacen."" ?> />
			</br>
			
			<label>Ciudad Almacen</label>
			<input TYPE ="TEXT" NAME = "ciudad_almacen" 
			value = <?php 
			echo "".$ciudad_almacen."" ?> />
			</br>
				
			<!--Boton de envio !-->
			<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
	
	</body>
</html>