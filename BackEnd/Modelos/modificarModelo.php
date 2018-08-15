<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_modelo= $_POST["id_modelo"];
	$descripcion_modelo= $_POST["descripcion_modelo"];

	include("../conexion.php");
	$bandera_conexion = true;
	
	
	if ($conexion){//si hubo conexión
		$param = array(
			array(&$id_modelo),
			array(&$descripcion_modelo)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarModelo @id=?,@modelo=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasModelo.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		ECHO "No se ejecutará la consulta";
		$banderaconexion= false;
	}

	
?>