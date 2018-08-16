<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$folio_salida = $_POST["folio_salida"];
	$fecha_salida = $_POST["fecha_salida"];
	$refaccion_salida = $_POST["refaccion_salida"];
	$cantidad_salida = $_POST["cantidad_salida"];
	$almacen_salida = $_POST["almacen_salida"];

	
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
			array(&$folio_salida),
			array(&$fecha_salida),
			array(&$refaccion_salida),
			array(&$cantidad_salida),
			array(&$almacen_salida)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarSalida @folio=?,@fecha=?,@refaccion=?,@cantidad=?,@almacen=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasSalida.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>