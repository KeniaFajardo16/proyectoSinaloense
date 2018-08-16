<?PHP
	$fecha_devolucion = $_POST["fecha_devolucion"];
	$salida_devolucion = $_POST["salida_devolucion"];
	$almacen_devolucion = $_POST["almacen_devolucion"];
	$observacion_devolucion = $_POST["observacion_devolucion"];
		
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
		$param=array(
			array(&$fecha_devolucion),
			array(&$salida_devolucion),
			array(&$almacen_devolucion),
			array(&$observacion_devolucion)
		);
		$resultado1= sqlsrv_query($conexion,"exec spInsertarDevolucion @fecha=?,@salida=?,@almacen=?,@observacion=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasDevolucion.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>