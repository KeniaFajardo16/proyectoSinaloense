<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_proveedor = $_POST["id_proveedor"];
	$rfc_proveedor = $_POST["rfc_proveedor"];
	$nombre_proveedor = $_POST["nombre_proveedor"];
	$ciudad_proveedor = $_POST["ciudad_proveedor"];
	$telefono_proveedor = $_POST["telefono_proveedor"];
	$cp_proveedor = $_POST["cp_proveedor"];

	
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
			array(&$id_proveedor),
			array(&$rfc_proveedor),
			array(&$nombre_proveedor),
			array(&$ciudad_proveedor),
			array(&$telefono_proveedor),
			array(&$cp_proveedor)
		);
		$resultado=sqlsrv_query($conexion,"exec spModificarProveedor @id=?,@rfc=?,@nombre=?,@ciudad=?,@telefono=?,@cp=?",$param);

		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			header("Location: consultasProveedor.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>