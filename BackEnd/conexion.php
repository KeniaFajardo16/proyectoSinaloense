<?php 
    $servidor ="192.168.1.2";
    //$servidor ="Luis-PC\SQLEXPRESS";
    $connectionInfo = array( "Database"=>"proyectosinaloense", "UID"=>"luis", "PWD"=>"123");

    //$connectionInfo = array( "Database"=>"proyectosinaloense", "UID"=>"userwebaccess", "PWD"=>"root");
    $conexion = sqlsrv_connect($servidor, $connectionInfo);
    sqlsrv_query($conexion,"SET NAMES 'UTF8'");
?>