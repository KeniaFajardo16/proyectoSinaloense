USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spModificarVehiculo]    Script Date: 15/08/2018 06:13:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spModificarVehiculo]
@id as int,
@marca as int,
@modelo as int,
@anio as int,
@tipomotor as int
AS
BEGIN
	UPDATE Vehiculos SET marca_vehiculo=@marca, modelo_vehiculo=@modelo, anio_vehiculo=@anio, tipoMotor_vehiculo=@tipomotor WHERE id_vehiculo=@id
END
