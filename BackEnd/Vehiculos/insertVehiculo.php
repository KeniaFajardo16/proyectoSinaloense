<?PHP
	$anio_vehiculo = $_POST["anio_vehiculo"];
	$marca_vehiculo = $_POST["marca_vehiculo"];
	$modelo_vehiculo = $_POST["modelo_vehiculo"];
	$tipoMotor_vehiculo = $_POST["tipoMotor_vehiculo"];
		
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
			array(&$marca_vehiculo),
			array(&$modelo_vehiculo),
			array(&$anio_vehiculo),
			array(&$tipoMotor_vehiculo)
		);
		$resultado1= sqlsrv_query($conexion,"exec spInsertarVehiculo @marca=?,@modelo=?,@anio=?,@tipomotor=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasVehiculo.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>