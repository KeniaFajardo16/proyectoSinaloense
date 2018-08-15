<?PHP
	$nombre_usuario = $_POST["nombre_usuario"];
	$tipo_usuario = $_POST["tipo_usuario"];
	$usuario = $_POST["usuario"];
	$contrasenia = $_POST["pass"];
	$contraseniaencriptada=sha1($contrasenia);
	
	include ("../conexion.php");
	
	$banderaconexion = true;
				
	if ($conexion) {//si hubo conexion
		ECHO "Conexion Exitosa *u* <BR>";
	}else{
		ECHO "Conexion Fallida :S <BR>";
		$banderaconexion = false;
	}
	$banderaconsulta=true;
	if($banderaconexion==true){
		ECHO "Ejecutanco Consulta </br>";
			
		//$query = "INSERT INTO Usuarios (nombre_usuario, tipo_usuario, usuario, pass) VALUES ('".$nombre_usuario."', '".$tipo_usuario."', '".$usuario."','".$contraseniaencriptada."')";
		//ECHO $query."</br>";
		//$resultado1= sqlsrv_query($conexion,$query);
		$parametros = array(
			array(&$nombre_usuario),
			array(&$tipo_usuario),
			array(&$usuario),
			array(&$contraseniaencriptada)
			);
		$resultado1 = sqlsrv_query($conexion,"exec spInsertarUsuario @nombreUsuario = ?, @tipoUsuario = ?, @usuario = ?, @pass = ?",$parametros);
		if($resultado1){
			ECHO "Inserción fue exitosa </br>"; 
			//redireccion a la pagina de consulta
			HEADER("Location: consultarUsuario.php");
		}else{
			ECHO "Insercion Fallida </br>";
		}
	}else{
		ECHO "No se ejecutará la consulta";
	}
?>