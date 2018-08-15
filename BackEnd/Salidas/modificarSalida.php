<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
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
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconsulta == true){
		ECHO "Ejecutando consulta </br>";
	$query = "UPDATE Salidas SET fecha_salida='".$fecha_salida."' , refaccion_salida='".$refaccion_salida."', cantidad_salida='".$cantidad_salida."', almacen_salida='".$almacen_salida."' WHERE folio_salida=".$folio_salida."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Salidas/consultasSalida.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>