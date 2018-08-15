<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_vehiculo = $_POST["id_vehiculo"];
	$anio_vehiculo = $_POST["anio_vehiculo"];
	$marca_vehiculo = $_POST["marca_vehiculo"];
	$modelo_vehiculo = $_POST["modelo_vehiculo"];
	$tipoMotor_vehiculo = $_POST["tipoMotor_vehiculo"];

	
	include("../conexion.php");
	$banderaconexion = true;
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconsulta == true){
		$param=array(
			array(&$id_vehiculo),
			array(&$marca_vehiculo),
			array(&$modelo_vehiculo),
			array(&$anio_vehiculo),
			array(&$tipoMotor_vehiculo)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarVehiculo @id=?,@marca=?,@modelo=?,@anio=?,@tipomotor=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasVehiculo.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>