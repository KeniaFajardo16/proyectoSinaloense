<?PHP
	
	$id_almacen = $_POST["id_almacen"];
	$nombre_almacen = $_POST["nombre_almacen"];
	$ciudad_almacen = $_POST["ciudad_almacen"];
		
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
			
	$query = "INSERT INTO Almacenes (id_almacen , nombre_almacen, ciudad_almacen) VALUES ('".$id_almacen."', '".$nombre_almacen."', '".$ciudad_almacen."')";
		ECHO $query."</br>";
		$resultado1= mysqli_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Refresh:5 url=http://localhost:8080/ProyectoSinoaloense/Almacenes/consultasAlmacen.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>