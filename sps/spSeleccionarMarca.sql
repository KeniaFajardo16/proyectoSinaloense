USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarMarca]    Script Date: 15/08/2018 06:15:06 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarMarca]
AS
BEGIN
	SELECT * FROM Marcas ORDER BY nombre_marca;
END
