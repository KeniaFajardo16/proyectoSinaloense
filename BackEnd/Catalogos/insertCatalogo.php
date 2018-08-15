<?PHP
	
	$id_catalogo = $_POST["id_catalogo"];
	$vehiculo_catalogo = $_POST["vehiculo_catalogo"];
	$subcategoria = $_POST["subcategoria_catalogo"];
	include("../conexion.php");
	
	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconsulta==true){
		ECHO "Ejecutanco Consulta </br>";
		
		$param=array(
			array(&$vehiculo_catalogo),
			array(&$subcategoria)
		);

		$resultado1= sqlsrv_query($conexion,"exec spInsertarCatalogo @vehiculo=?,@subcategoria=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasCatalogo.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>