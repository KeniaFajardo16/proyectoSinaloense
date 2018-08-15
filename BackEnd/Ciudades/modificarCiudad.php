<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_ciudad = $_POST["id_ciudad"];
	$nombre_ciudad = $_POST["nombre_ciudad"];
	$estado_ciudad = $_POST["estado_ciudad"];

	
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
		$query = "UPDATE Ciudades SET nombre_ciudad='".$nombre_ciudad."' , estado_ciudad='".$estado_ciudad."' WHERE id_ciudad=".$id_ciudad."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Ciudades/consultasCiudad.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>