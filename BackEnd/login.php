<?php
    session_start();

    include("conexion.php");
    $usuario = $_POST["uname"];
    $pass = $_POST["psw"];
    $contraseniaencriptada = sha1($pass);

    if($conexion){
        $parametros = array(
			array(&$usuario),
			array(&$contraseniaencriptada)
        );
        $resultado = sqlsrv_query($conexion,"exec spLogin @usuario = ?, @pass = ?",$parametros);
        $coincidencia = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);
        if($coincidencia["COINCINDECIA"]==1){
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $usuario;
            $_SESSION['start'] = time();
            $_SESSION['expire'] = $_SESSION['start'] + (5*60);
            header('Location: ../FrontEnd/login_pass.php');
        }
        else{
            header('Location: ../FrontEnd/index.php');
        }
    }

?>