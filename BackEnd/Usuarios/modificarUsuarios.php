<?PHP
	ECHO "<H1> Actualizando datos </BR></H1>";
	
	$id_usuario= $_POST["id_usuario"];
	$nombre_usuario= $_POST["nombre_usuario"];
	$tipo_usuario= $_POST["tipo_usuario"];
	$usuario= $_POST["usuario"];
	$contrasenia= $_POST["password"];
	$contraseniaencriptada=sha1($contrasenia);
	
	
	//ECHO "Hemos enviado un mensaje a tu correo ".$correo."</BR>";
	include ("../conexion.php");
	
	
	//1.3 Bandera que monitorea la conexión
	$banderaconexion = true;
	if ($conexion){//si hubo conexión
		 ECHO "Conexión exitosa. </BR> ";
		
	}else{
		ECHO "Conexión fallida :c <BR>";
		$banderaconexion= false;
	}
	
	$banderaconsulta=true;
	if ($banderaconexion == true){
		ECHO "Ejecutando consulta </br>";
		//INSERT INTO empleados_planta (Id_Empleado, Nombre_Empleado, Apellido_Empleado, Edad_Empleado, Bono) VALUES (NULL, 'Luis', 'Mejía', '20', '2500');
		//$query = "UPDATE Usuarios SET nombre_usuario='".$nombre_usuario."', tipo_usuario='".$tipo_usuario."', usuario='".$usuario."', pass='".$contraseniaencriptada."' WHERE id_usuario=".$id_usuario."";
		//ECHO $query."</br>";
		//$resultado=sqlsrv_query($conexion,$query);

		$parametros = array(
			array(&$nombre_usuario),
			array(&$tipo_usuario),
			array(&$usuario),
			array(&$contraseniaencriptada),
			array(&$id_usuario)
			);
		$resultado = sqlsrv_query($conexion,"exec spModificarUsuario @nombreUsuario = ?, @tipoUsuario = ?, @usuario = ?, @pass = ?, @id = ?",$parametros);
		
		if($resultado){
			ECHO "La modificación fue exitosa </br>";
			//redireccion a la pagina de consulta
			HEADER("Location: consultarUsuario.php");
		}else{
			ECHO "La modificación fue fallida ";
		}
		}else{
		ECHO "No se ejecutará la consulta";
	}
	
?>