<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_almacen = $_POST["id_almacen"];
	$nombre_almacen = $_POST["nombre_almacen"];
	$ciudad_almacen = $_POST["ciudad_almacen"];

	
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
		$query = "UPDATE Almacenes SET nombre_almacen='".$nombre_almacen."' , ciudad_almacen='".$ciudad_almacen."' WHERE id_almacen=".$id_almacen."";
		ECHO $query."</br>";
		$resultado=mysqli_query($conexion,$query);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Almacenes/consultasAlmacen.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>