USE [proyectosinaloense]
GO
/****** Object:  StoredProcedure [dbo].[spEliminarCategoria]    Script Date: 15/08/2018 06:06:18 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[spEliminarCategoria]
	@id as int
AS
BEGIN
	DELETE FROM Categorias WHERE id_categoria=@id
END