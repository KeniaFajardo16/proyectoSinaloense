<?PHP
	$fecha_salida = $_POST["fecha_salida"];
	$refaccion_salida = $_POST["refaccion_salida"];
	$cantidad_salida = $_POST["cantidad_salida"];
	$almacen_salida = $_POST["almacen_salida"];
	
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
			array(&$fecha_salida),
			array(&$refaccion_salida),
			array(&$cantidad_salida),
			array(&$almacen_salida)
		);
		
		
		$resultado1=sqlsrv_query($conexion,"exec spInsertarSalida @fecha=?, @refaccion=?, @cantidad=?, @almacen=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasSalida.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>