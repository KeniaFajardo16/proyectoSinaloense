USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarAnio]    Script Date: 15/08/2018 06:05:28 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarAnio]
	@id as int = null
AS
BEGIN
	DELETE FROM Anios WHERE id_anio=@id
END
