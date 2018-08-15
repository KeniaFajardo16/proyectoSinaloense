<?PHP
	$fecha_entrada = $_POST["fecha_entrada"];
	$refaccion_entrada = $_POST["refaccion_entrada"];
	$cantidad_entrada = $_POST["cantidad_entrada"];
	$almacen_entrada = $_POST["almacen_entrada"];
		
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
			array(&$fecha_entrada),
			array(&$refaccion_entrada),
			array(&$cantidad_entrada),
			array(&$almacen_entrada)
		);
		$resultado1= sqlsrv_query($conexion,"exec spInsertarEntrada @fecha=?,@refaccion=?,@cantidad=?,@almacen=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasEntrada.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>