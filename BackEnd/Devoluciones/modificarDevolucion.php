<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
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
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconsulta == true){
		ECHO "Ejecutando consulta </br>";
	$query = "UPDATE Devoluciones SET fecha_devolucion='".$fecha_devolucion."' , salida_devolucion='".$salida_devolucion."', almacen_devolucion='".$almacen_devolucion."', observacion_devolucion='".$observacion_devolucion."' WHERE folio_devolucion=".$folio_devolucion."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Devoluciones/consultasDevolucion.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>