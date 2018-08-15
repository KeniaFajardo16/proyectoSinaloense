<?PHP
	
	$folio_salida = $_POST["folio_salida"];
	$fecha_salida = $_POST["fecha_salida"];
	$refaccion_salida = $_POST["refaccion_salida"];
	$cantidad_salida = $_POST["cantidad_salida"];
	$almacen_salida = $_POST["almacen_salida"];
		
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
			
		$query = "INSERT INTO Salidas (folio_salida, fecha_salida, refaccion_salida, cantidad_salida, almacen_salida) VALUES ('".$folio_salida."', '".$fecha_salida."', '".$refaccion_salida."', '".$cantidad_salida."', '".$almacen_salida."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Salidas/consultasSalida.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>