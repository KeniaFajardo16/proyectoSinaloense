<?PHP
	
	$nombre_categoria = $_POST["nombre_categoria"];
	include("../conexion.php");
	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconexion==true){
		ECHO "Ejecutanco Consulta </br>";
		$param=array(
			array(&$nombre_categoria)
		);
		$resultado1= sqlsrv_query($conexion,"exec spInsertarCategoria @categoria=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consutasCategoria.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>