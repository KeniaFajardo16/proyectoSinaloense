<?PHP
	
	$id_estado = $_POST["id_estado"];
	$nombre_estado = $_POST["nombre_estado"];
		
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
			
		$query = "INSERT INTO Estados (id_estado , nombre_estado) VALUES ('".$id_estado."', '".$nombre_estado."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Estados/consultasEstado.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>