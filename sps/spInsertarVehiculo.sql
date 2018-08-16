USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spInsertarVehiculo]    Script Date: 15/08/2018 06:10:18 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spInsertarVehiculo]
@marca as int,
@modelo as int,
@anio as int,
@tipomotor as int
AS
BEGIN
	INSERT INTO Vehiculos (marca_vehiculo,modelo_vehiculo,anio_vehiculo,tipoMotor_vehiculo) VALUES (@marca,@modelo,@anio,@tipomotor)
END
