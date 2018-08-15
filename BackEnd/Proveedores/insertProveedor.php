<?PHP
	
	$rfc_proveedor = $_POST["rfc_proveedor"];
	$nombre_proveedor = $_POST["nombre_proveedor"];
	$ciudad_proveedor = $_POST["ciudad_proveedor"];
	$telefono_proveedor = $_POST["telefono_proveedor"];
	$cp_proveedor = $_POST["cp_proveedor"];
	
		
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
		ECHO "Ejecutanco Consulta </br>";
			
		$param=array(
			array(&$rfc_proveedor),
			array(&$nombre_proveedor),
			array(&$ciudad_proveedor),
			array(&$telefono_proveedor),
			array(&$cp_proveedor)
		);
		
		$resultado1= sqlsrv_query($conexion,"exec spInsertarProveedor @rfc=?, @nombre=?, @ciudad=?, @telefono=?, @cp=?",$param);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			header("Location: consultasProveedor.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>