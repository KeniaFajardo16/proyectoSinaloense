USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarMarca]    Script Date: 15/08/2018 06:06:54 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarMarca]
	@idmarca as int = null
AS
BEGIN
	DELETE FROM Marcas WHERE id_marca=@idmarca;
END
