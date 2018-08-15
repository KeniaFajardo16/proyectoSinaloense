<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_estado = $_POST["id_estado"];
	$nombre_estado = $_POST["nombre_estado"];

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
		$query = "UPDATE Estados SET nombre_estado='".$nombre_estado."' WHERE id_estado=".$id_estado."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Estados/consultasEstado.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>