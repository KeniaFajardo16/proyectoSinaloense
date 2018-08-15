<?PHP
	$descripcion_anio = $_POST["descripcion_anio"];
		
	include("../conexion.php");

	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconsulta){
		ECHO "Ejecutanco Consulta </br>";
		
		$param=array(	
			array(&$descripcion_anio),
			array(&$descripcion_anio)
		);
		
		$resultado1= sqlsrv_query($conexion,"exec spInsertarAnio @id=?, @anio=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasAnio.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>