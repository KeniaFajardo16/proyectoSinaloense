<?PHP
	
	$folio_devolucion = $_POST["folio_devolucion"];
	$fecha_devolucion = $_POST["fecha_devolucion"];
	$salida_devolucion = $_POST["salida_devolucion"];
	$almacen_devolucion = $_POST["almacen_devolucion"];
	$observacion_devolucion = $_POST["observacion_devolucion"];
		
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$database = "proyectosinaloense";
	
	$conexion = mysqli_connect($servername, $username, $password, $database);
	$bandera_conexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconsulta==true){
		ECHO "Ejecutanco Consulta </br>";
			
		$query = "INSERT INTO Devoluciones (folio_devolucion, fecha_devolucion, salida_devolucion, almacen_devolucion, observacion_devolucion) VALUES ('".$folio_devolucion."', '".$fecha_devolucion."', '".$salida_devolucion."', '".$almacen_devolucion."', '".$observacion_devolucion."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Devoluciones/consultasDevolucion.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>