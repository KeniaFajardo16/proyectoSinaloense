<?php 
    $servidor ="Luis-PC\SQLEXPRESS";
    $connectionInfo = array( "Database"=>"proyectosinaloense", "UID"=>"userwebaccess", "PWD"=>"root");
    $conexion = sqlsrv_connect($servidor, $connectionInfo);
    sqlsrv_query($conexion,"SET NAMES 'UTF8'");
?>