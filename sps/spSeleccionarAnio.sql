USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spSeleccionarAnio]    Script Date: 15/08/2018 06:13:37 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spSeleccionarAnio]
AS
BEGIN
	SELECT * FROM Anios
END
