<?php 

$folio_devolucion =$_GET['folio_devolucion'];
$fecha_devolucion =$_GET['fecha_devolucion'];
$salida_devolucion =$_GET['salida_devolucion'];
$almacen_devolucion =$_GET['almacen_devolucion'];
$observacion_devolucion =$_GET['observacion_devolucion'];

?>
<html>
	<head>
		<title>MODIFICAR DEVOLUCIONES</title>
	</head>
	<body>
		<form action = "modificarDevolucion.php" METHOD="POST">
			<!--Cajas de texto !-->
				
			<label>Folio Devolucion</label>
			<input TYPE ="TEXT" NAME = "folio_devolucion" 
			value = <?php echo "".$folio_devolucion."" ?> 
			/>
			</br>
				
			<label>Fecha Devolucion </label>
			<input TYPE ="TEXT" NAME = "fecha_devolucion" 
			value = <?php 
			echo "".$fecha_devolucion."" ?> />
			</br>
			
			<label>Salida Devolucion</label>
			<input TYPE ="TEXT" NAME = "salida_devolucion" 
			value = <?php 
			echo "".$salida_devolucion."" ?> />
			</br>
			
			<label>Almacen Devolucion</label>
			<input TYPE ="TEXT" NAME = "almacen_devolucion" 
			value = <?php 
			echo "".$almacen_devolucion."" ?> />
			</br>
			
			<label>Observacion Devolucion</label>
			<input TYPE ="TEXT" NAME = "observacion_devolucion" 
			value = <?php 
			echo "".$observacion_devolucion."" ?> />
			</br>
				
			<!--Boton de envio !-->
			<input type = "SUBMIT" VALUE = "Modificar" />
		</form>
	
	</body>
</html>