USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarVehiculo]    Script Date: 15/08/2018 06:08:04 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarVehiculo]
@id as int
AS
BEGIN
	DELETE FROM Vehiculos WHERE id_vehiculo=@id
END
