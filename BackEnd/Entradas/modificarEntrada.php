<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$folio_entrada = $_POST["folio_entrada"];
	$fecha_entrada = $_POST["fecha_entrada"];
	$refaccion_entrada = $_POST["refaccion_entrada"];
	$cantidad_entrada = $_POST["cantidad_entrada"];
	$almacen_entrada = $_POST["almacen_entrada"];

	
	include("../conexion.php");
	$bandera_conexion = true;
	
	
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconsulta == true){
		$param=array(
			array(&$folio_entrada),
			array(&$fecha_entrada),
			array(&$refaccion_entrada),
			array(&$cantidad_entrada),
			array(&$almacen_entrada)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarEntrada @folio=?,@fecha=?,@refaccion=?,@cantidad=?,@almacen=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasEntrada.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>