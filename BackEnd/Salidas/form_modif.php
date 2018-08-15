<?php 

$folio_salida =$_GET['folio_salida'];
$fecha_salida =$_GET['fecha_salida'];
$refaccion_salida =$_GET['refaccion_salida'];
$cantidad_salida =$_GET['cantidad_salida'];
$almacen_salida =$_GET['almacen_salida'];

?>
<html>
	<head>
		<title>MODIFICAR SALIDAS</title>
	</head>
	<body>
		<form action = "modificarSalida.php" METHOD="POST">
			<!--Cajas de texto !-->
				
			<label>Folio Salida</label>
			<input TYPE ="TEXT" NAME = "folio_salida" 
			value = <?php echo "".$folio_salida."" ?> 
			/>
			</br>
				
			<label>Fecha Salida </label>
			<input TYPE ="TEXT" NAME = "fecha_salida" 
			value = <?php 
			echo "".$fecha_salida."" ?> />
			</br>
			
			<label>Refaccion Salida</label>
			<input TYPE ="TEXT" NAME = "refaccion_salida" 
			value = <?php 
			echo "".$refaccion_salida."" ?> />
			</br>
			
			<label>Cantidad Salida</label>
			<input TYPE ="TEXT" NAME = "cantidad_salida" 
			value = <?php 
			echo "".$cantidad_salida."" ?> />
			</br>
			
			<label>Almacen Salida</label>
			<input TYPE ="TEXT" NAME = "almacen_salida" 
			value = <?php 
			echo "".$almacen_salida."" ?> />
			</br>
				
			<!--Boton de envio !-->
			<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
	
	</body>
</html>