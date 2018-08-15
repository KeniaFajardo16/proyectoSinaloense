<?PHP
	$descripcion_modelo = $_POST["descripcion_modelo"];
		
	include("../conexion.php");
	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
		ECHO "Ejecutanco Consulta </br>";
		
		$param=array(
			array(&$descripcion_modelo)
		);
		
		$resultado1= sqlsrv_query($conexion,"exec spInsertarModelo @modelo=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasModelo.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "Conexion Fallida :S <BR>";
		ECHO "No se ejecutará la consulta";
		$banderaconexion = false;
	}
	
?>