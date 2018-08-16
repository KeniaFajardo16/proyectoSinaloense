USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarVehiculo]    Script Date: 15/08/2018 06:16:11 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarVehiculo]
AS
BEGIN
	SELECT id_vehiculo, nombre_marca, descripcion_modelo, descripcion_anio, descripcion_tipoMotor FROM Vehiculos v INNER JOIN Anios a ON v.anio_vehiculo=a.id_anio INNER JOIN Modelos m ON v.modelo_vehiculo=m.id_modelo INNER JOIN Tipo_Motores tm ON v.tipoMotor_vehiculo=tm.id_tipoMotor INNER JOIN Marcas mar ON v.marca_vehiculo=mar.id_marca
END
