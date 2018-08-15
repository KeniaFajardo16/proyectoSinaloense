<?PHP
	$nombre_marca = $_POST["nombre_marca"];
		
	include ("../conexion.php");

	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
		die( print_r( sqlsrv_errors(), true));
	}
	$banderaconsulta=true;
	if($banderaconexion==true){
		ECHO "Ejecutanco Consulta </br>";
			
		$query = "INSERT INTO Marcas (nombre_marca) VALUES ('".$nombre_marca."')";
		ECHO $query."</br>";
		$resultado1=sqlsrv_query($conexion,$query);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			//redireccion a la pagina de consulta
			header("Location: consultMarcas.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
?>