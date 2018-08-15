<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_anio= $_POST["id_anio"];
	$descripcion_anio= $_POST["descripcion_anio"];

	include("../conexion.php");
	$banderaconexion = true;
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconexion == true){
		ECHO "Ejecutando consulta </br>";
		$param = array(
			array(&$id_anio),
			array(&$descripcion_anio)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarAnio @id=?,@anio=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasAnio.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>