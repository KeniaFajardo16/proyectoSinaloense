USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarCiudad]    Script Date: 15/08/2018 06:14:08 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarCiudad]
AS
BEGIN
	SELECT * FROM Ciudades ORDER BY nombre_ciudad
END
